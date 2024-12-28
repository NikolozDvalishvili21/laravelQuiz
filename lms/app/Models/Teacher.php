<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'organization_id'];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
