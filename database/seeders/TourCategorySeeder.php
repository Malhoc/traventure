<?php

namespace Database\Seeders;

use App\Models\TourCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TourCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Category A', 'Category B', 'Category C'];

        foreach ($categories as $category) {
            TourCategory::create(
                ['name' => $category,  'slug' => Str::slug($category)],
            );
        }
        // \App\Models\BlogCategory::factory(5)->create();
    }
}
