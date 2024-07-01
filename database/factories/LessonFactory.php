<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Lesson>
 */
class LessonFactory extends Factory
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
            'classroom_id'=>$this->faker->lesson_id,
            'branch_id'=>$this->faker->branch_id,
            'teacher_id'=>$this->faker->teacher_id,
        ];
    }
}

