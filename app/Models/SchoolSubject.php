<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolSubject extends Model
{
    use HasFactory;

    public function courses() {
        return $this->belongsToMany(Course::class);//, 'course_id');
      }
}
