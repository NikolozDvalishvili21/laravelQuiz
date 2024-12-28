<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
        Teacher::all()->each(function ($teacher) {
            Course::factory(rand(1, 13))->create(['teacher_id' => $teacher->id]);
        });
    }
}
