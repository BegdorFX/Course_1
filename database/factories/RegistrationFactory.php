<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = registration::class;
    public function definition()
    {
        return [
            'lesson_id'=>$this->faker->lesson_id,
            'student_id'=>$this->faker->student_id,
            'price'=>$this->faker->price,
        ];
    }
}
