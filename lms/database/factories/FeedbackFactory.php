<?php

namespace Database\Factories;

use App\Models\Feedback;
use App\Models\Lesson;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackFactory extends Factory
{
    protected $model = Feedback::class;

    public function definition()
    {
        return [
            'feedback' => $this->faker->paragraph, 
            'lesson_id' => Lesson::all()->random()->id,
            'student_id' => Student::all()->random()->id,
        ];
    }
}
