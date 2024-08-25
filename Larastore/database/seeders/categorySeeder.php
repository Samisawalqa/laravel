<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory(20)->create();
    }
}
