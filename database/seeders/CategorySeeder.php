<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
     {
    $data = [
        [ 'name' => 'Makanan', 'description' => ' Kategori Makanan'],
        [ 'name' => 'Minuman', 'description' => ' Kategori Makanan'],
        [ 'name' => 'Pakaian', 'description' => ' Kategori Makanan'],
        [ 'name' => 'Elektronik', 'description' => ' Kategori Elektronik'],
    ] ;
    \App\Models\Category::insert($data);
} }