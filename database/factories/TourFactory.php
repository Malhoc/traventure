<?php

namespace Database\Factories;

use App\Models\Destination;
use App\Models\TourCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tour>
 */
class TourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'location' => $this->faker->country(),
            'duration' => $this->faker->randomElement(['5 Days', '1 Month', '8 Days', '2 Weeks']),
            'facilities' => $this->faker->sentence(),
            'features' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(12,50),
            'group_limit' => $this->faker->numberBetween(12,50),
            'gallery' => json_encode(['asd','asdasd','asdasd']),
            'summary' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'slug' => $this->faker->slug(),
            'image' =>  $this->faker->image('public/storage/images/tours', 1920, 509, null, false),
            'thumbnail' => $this->faker->image('public/storage/images/tours', 310, 291, null, false),
            'meta_tag_title' => $this->faker->sentence(),
            'meta_tag_keywords' => $this->faker->sentence(),
            'meta_tag_description' => $this->faker->paragraph(),
            'is_active' => $this->faker->randomElement([true, false]),
            'tour_category_id' => TourCategory::pluck('id')->random(),
            'destination_id' => Destination::pluck('id')->random(),
        ];
    }
}
