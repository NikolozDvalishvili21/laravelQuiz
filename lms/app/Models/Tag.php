<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function lessons()
    {
        return $this->morphedByMany(Lesson::class, 'taggable');
    }

    public function courses()
    {
        return $this->morphedByMany(Course::class, 'taggable');
    }

    public function teachers()
    {
        return $this->morphedByMany(Teacher::class, 'taggable');
    }
}
