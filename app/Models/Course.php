<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';

    public function schoolSubjects() {
        return $this->belongsToMany(SchoolSubject::class);//, 'school_subject_id');
    }

    public function clasrooms() {
        return $this->belongsToMany(Classroom::class);
    }

    public function teachers() {
        return $this->belongsToMany(Teacher::class);
    }

    public function students() {
        return $this->belongsToMany(Student::class);
    }
}
