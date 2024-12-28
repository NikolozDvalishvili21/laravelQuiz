<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\Module;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    public function run()
    {
        Module::all()->each(function ($module) {
            Lesson::factory(rand(4, 20))->create(['module_id' => $module->id]);
        });
    }
}
