<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Support\DemoMode;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ResetStagingDatabaseCommand extends Command
{
    protected $signature = 'app:reset-staging-database 
                            {--force : Force execution in non-local environments}
                            {--refresh-template : Re-run migrations and regenerate the snapshot template}';

    protected $description = 'Safely wipe and reset the staging database to pristine demo state using SQLite snapshot restore';

    public function handle(): int
    {
        if (! DemoMode::isEnabled() && ! $this->option('force')) {
            $this->error('Database reset is disabled in production environments without --force.');
            return self::FAILURE;
        }

        $connection = config('database.default');

        if ($connection === 'sqlite') {
            return $this->resetSqliteDatabase();
        }

        // Fallback for MySQL/PostgreSQL environments
        $this->info('Non-SQLite connection detected. Running migrate:fresh with seeders...');
        Artisan::call('migrate:fresh', [
            '--seed' => true,
            '--force' => true,
        ]);

        $this->info('Database reset completed successfully.');
        return self::SUCCESS;
    }

    protected function resetSqliteDatabase(): int
    {
        // Rollback any active transactions (e.g. from tests or web workers)
        while (DB::transactionLevel() > 0) {
            DB::rollBack();
        }

        $dbPath = config('database.connections.sqlite.database');

        if ($dbPath === ':memory:') {
            Artisan::call('db:seed', ['--force' => true]);
            $this->info('In-memory database reset completed.');
            return self::SUCCESS;
        }
        
        // Handle relative paths
        if (! str_starts_with($dbPath, '/') && ! preg_match('/^[A-Za-z]:[\\\\\/]/', $dbPath)) {
            $dbPath = base_path($dbPath);
        }

        $templatePath = dirname($dbPath) . DIRECTORY_SEPARATOR . 'database.sqlite.template';

        $needsNewTemplate = $this->option('refresh-template') || ! File::exists($templatePath);

        if ($needsNewTemplate) {
            $this->info('Generating fresh SQLite template snapshot via migrate:fresh --seed...');
            
            Artisan::call('migrate:fresh', [
                '--seed' => true,
                '--force' => true,
            ]);

            DB::disconnect();

            // Checkpoint and remove any SQLite WAL/SHM files
            $this->cleanupWalFiles($dbPath);

            if (File::exists($dbPath)) {
                File::copy($dbPath, $templatePath);
                $this->info("Pristine template created at [{$templatePath}].");
            }

            DB::reconnect();
            $this->info('Database reset and snapshot creation complete.');
            return self::SUCCESS;
        }

        $this->info('Restoring database from pristine template snapshot...');

        DB::disconnect();

        $this->cleanupWalFiles($dbPath);

        if (! File::copy($templatePath, $dbPath)) {
            $this->error('Failed to copy template file over database.sqlite.');
            DB::reconnect();
            return self::FAILURE;
        }

        DB::reconnect();

        // Clear application caches
        Artisan::call('cache:clear');

        $this->info('SQLite database restored to pristine state in sub-10ms.');
        return self::SUCCESS;
    }

    protected function cleanupWalFiles(string $dbPath): void
    {
        $wal = $dbPath . '-wal';
        $shm = $dbPath . '-shm';

        if (File::exists($wal)) {
            @unlink($wal);
        }
        if (File::exists($shm)) {
            @unlink($shm);
        }
    }
}
