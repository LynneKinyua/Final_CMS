<?php

use App\User;  
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Lynne Kinyua',
            'email' => 'lynnemkin@gmail.com',
            'roles' => 'admin',
            'isActive'=> 1,
            'password' =>('Charity@72'),

        ]);

        user::create([
            'name'=>'Mwangi Kinyua',
            'email'=>'mkinyua@gmail.com',
            'roles'=> 'user',
            'isActive' => 1,
            'password'=>('password'),
        ]);
        user::create([
            'name'=>'Kinyua Mwangi',
            'email'=>'kmwangi@gmail.com',
            'roles'=> 'user',
            'isActive' => 1,
            'password'=>Hash::make('password'),
        ]);
        user::create([
            'name'=>'Wawira Kinyua',
            'email'=>'wkinyua@gmail.com',
            'roles'=> 'user',
            'isActive' => 1,
            'password'=>Hash::make('password'), 
        ]);

    }
}
