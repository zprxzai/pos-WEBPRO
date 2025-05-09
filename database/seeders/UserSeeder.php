<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [ 'name' => 'Zaidan', 'email' => ' zaidan@gmail.com', 'password' => bcrypt('zaidan')],
            [ 'name' => 'Zaidan', 'email' => ' zaidan7@gmail.com', 'password' => bcrypt('zaidan')],
            [ 'name' => 'Zaidan', 'email' => ' zaidan1@gmail.com', 'password' => bcrypt('zaidan')],
        ] ;
        \App\Models\User::insert($data);
    }
}
