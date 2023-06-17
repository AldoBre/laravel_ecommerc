<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Aldo',
            'last_name' => 'Bressan',
            'email' => 'aldo@email.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
