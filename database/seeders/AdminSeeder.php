<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'first_name' => 'Admin',
                'last_name' => 'User',
                'phone' => '1234567890',
                'password' => Hash::make('12345'), // Using the password from earlier turns
                'email_verified_at' => now(),
            ]
        );

        $admin->assignRole('Admin');
    }
}
