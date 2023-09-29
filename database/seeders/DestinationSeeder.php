<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $destinations = ['USA', 'China', 'Turkey'];

        foreach ($destinations as $destination) {
            Destination::create(
                ['name' => $destination,  'slug' => Str::slug($destination)],
            );
        }
    }
}
