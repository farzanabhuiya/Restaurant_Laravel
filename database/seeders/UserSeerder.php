<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeerder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $user = new User();
       $user->name = 'Farzana Bhuiyan';
       $user->email= 'farzana12345@gmail.com';
       $user->password='12345678';
       $user->save();

    // User::factory(5)->create();
    }
}
