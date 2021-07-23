<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {
        User::insert([
            'name' => 'Anar Cəfərov',
            'email' => 'anarceferov1996@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 
        ]);
 
         \App\Models\User::factory(7)->create();
    }
}