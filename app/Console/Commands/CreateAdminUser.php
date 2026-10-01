<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateAdminUser extends Command
{
    protected $signature = 'make:admin {--name= : The admin user name} {--email= : The admin user email}';
    protected $description = 'Securely create or update an administrator account';

    public function handle(): int
    {
        $name = $this->option('name') ?: $this->ask('Enter admin username', 'admin');
        $email = $this->option('email') ?: $this->ask('Enter admin email address', 'admin@viaje.ph');
        $password = $this->secret('Enter admin password');

        if (empty($password)) {
            $this->error('Password cannot be empty.');
            return self::FAILURE;
        }

        $passwordConfirmation = $this->secret('Confirm admin password');
        if ($password !== $passwordConfirmation) {
            $this->error('Passwords do not match.');
            return self::FAILURE;
        }

        $validator = Validator::make([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ], [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }
            return self::FAILURE;
        }

        $user = User::updateOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'password' => Hash::make($password),
                'email_verified_at' => now(),
            ]
        );

        $this->info("Administrator [{$user->name}] ({$user->email}) provisioned successfully.");
        return self::SUCCESS;
    }
}
