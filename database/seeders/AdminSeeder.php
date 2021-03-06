<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin test',
            'email' => 'emailtest@gmail.com',
            'password' => Hash::make('Admin123')
        ]);

        $role = Role::create([
           'name' => 'Admin'
        ]);
        $permissions = Permission::create([
           'name' =>  'Access panel'
        ]);

        $role->syncPermissions($permissions);

        $user->assignRole('Admin');

    }
}
