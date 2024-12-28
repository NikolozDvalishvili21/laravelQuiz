<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\Organization;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        $organizations = Organization::all();

        foreach ($organizations as $organization) {
            Teacher::factory(rand(5, 23))->create([
                'organization_id' => $organization->id,
            ]);
        }
    }
}
