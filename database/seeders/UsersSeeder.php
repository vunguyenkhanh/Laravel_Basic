<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('123123'),
                'role' => 0

            ];
        User::create($admin);

        User::factory()->count(100)->create();
    }
}
