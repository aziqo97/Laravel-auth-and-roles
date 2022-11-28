<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'manager',
            'role_id' => 1,
            'email' => 'admin@admin.uz',
            'password' => Hash::make('secret'),
        ]);
        User::create([
            'name' => 'example client',
            'role_id' => 2,
            'email' => 'client@admin.uz',
            'password' => Hash::make('secret'),
        ]);
    }
}
