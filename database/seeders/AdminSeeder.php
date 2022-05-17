<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'S. M. Ashikur Rahman',
            'email'=>'ashikgbcse1@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
    }
}
