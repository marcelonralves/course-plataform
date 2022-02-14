<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Course::class;

    public function definition()
    {
        return [
            "name" => $this->faker->paragraph,
            "description" => $this->faker->paragraph,
            "is_active" => $this->faker->boolean,
            "image_url" => $this->faker->imageUrl(1024, 768),
            "author_id" => 1,
            "price" => '100',
            "slug" => $this->faker->slug
        ];
    }
}
