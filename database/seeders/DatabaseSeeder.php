<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\TourCategory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Descriptor\Descriptor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Storage::makeDirectory('public/images/users');
        Storage::makeDirectory('public/images/blogs');
        Storage::makeDirectory('public/images/tours');
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@123'),
            'role' => 'admin'
        ]);
        User::factory(10)->create();
        $this->call(BlogCategorySeeder::class);
        $this->call(DestinationSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(TourCategorySeeder::class);
        $this->call(DestinationSeeder::class);
        $this->call(TourSeeder::class);


    }
}
