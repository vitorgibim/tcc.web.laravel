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

    public function schoolCalls() 
    {
        return $this->hasMany(SchoolCall::class, 'school_subject_id', 'id');
    }

    public function teachers() {
        return $this->belongsToMany(Teacher::class, 'teacher_school_subject', 'school_subject_id', 'teacher_id');
    }

    public function students() {
        return $this->belongsToMany(Student::class, 'student_school_subject', 'school_subject_id', 'student_id');
    }
}
