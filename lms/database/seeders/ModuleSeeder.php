<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Course;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    public function run()
    {
        Course::all()->each(function ($course) {
            Module::factory(rand(3, 15))->create(['course_id' => $course->id]);
        });
    }
}
