<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Penjualan;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::factory(3)->create();

       Category::create([
        'name' => 'Mahar',
        'slug' => 'mahar',
       ]);

       Category::create([
        'name' => 'Seserahan',
        'slug' => 'seserahan',
       ]);
    }
}
