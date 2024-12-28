<?php

namespace Database\Factories;

use App\Models\Module;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModuleFactory extends Factory
{
    protected $model = Module::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word,  
            'course_id' => Course::all()->random()->id,  
        ];
    }
}
