<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\LessonFactory;
use Database\Factories\RegistrationFactory;
use Database\Factories\StudentFactory;
use Database\Factories\TeacherFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LocationSeeder::class,
            BranchSeeder::class,
            ClassroomSeeder::class,
        ]);
        TeacherFactory::factory()->count(10)->create();
        StudentFactory::factory()->count(50)->create();
        LessonFactory::factory()->count(50)->create();
        RegistrationFactory::factory()->count(100)->create();
    }
}
