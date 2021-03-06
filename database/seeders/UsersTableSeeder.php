<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'No Admin',
            'email' => 'noadmin@gmail.com',
            'password' => Hash::make('Noadmin123')
        ]);

        Role::create([
            'name' => 'User'
        ]);

        $user->assignRole('User');
    }
}
