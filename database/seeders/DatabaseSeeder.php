<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $adminPassword = env('ADMIN_DEFAULT_PASSWORD', 'admin');
        User::updateOrCreate(
            ['email' => 'admin@viaje.ph'],
            [
                'name' => 'admin',
                'password' => bcrypt($adminPassword),
            ]
        );

        $this->call([
            CarSeeder::class,
            BookingSeeder::class,
        ]);
    }
}
