<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{

    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => ucwords($this->faker->words(rand(3, 5), true),),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->paragraph(),
            'category' => $this->faker->randomElement(['Desarrollo Web', 'Diseño Web'])
        ];
    }
}
