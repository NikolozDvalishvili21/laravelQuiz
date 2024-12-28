<?php

namespace Database\Seeders;

use App\Models\Feedback;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    public function run()
    {
        Lesson::all()->each(function ($lesson) {
            Feedback::factory(rand(1, 5))->create(['lesson_id' => $lesson->id]);
        });
    }
}
