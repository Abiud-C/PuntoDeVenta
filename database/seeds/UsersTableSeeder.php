<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'=>'Admin',
            'slug'=>'admin',
            'special'=>'all-access',
        ]);

        $user = User::create([
            'name'=>'Abiud',
            'email'=>'aj.al970719@gmail.com',
            'password'=>'$2y$10$HD7ULZd8PsMQ.oBLjrcVxOPkEYW7DXhIg/4uP6fDRYaY92oFHWx.S',
        ]);

        $user->roles()->sync(1);
    }
}
