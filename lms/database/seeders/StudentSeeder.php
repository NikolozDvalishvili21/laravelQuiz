<?php

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run()
    {
        Student::create(['name' => 'John Doe', 'email' => 'john.doe@example.com']);
        Student::create(['name' => 'Jane Doe', 'email' => 'jane.doe@example.com']);
    }
}

