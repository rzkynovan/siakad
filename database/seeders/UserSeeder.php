<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'rizky novan',
            'gender' => 'laki - laki',
            'email' => 'rizkynovan21@gmail.com',
            'password' => \bcrypt('12345678')
        ]);
    }
}
