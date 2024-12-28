<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Relationship with teachers
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}
