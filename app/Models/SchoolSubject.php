<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolSubject extends Model
{
    use HasFactory;
    protected $table = 'school_subjects';
    protected $fillable = ['name', 'workload'];


    public function courses() {
        return $this->belongsToMany(Course::class, 'course_school_subject', 'school_subject_id', 'course_id');
      }
}
