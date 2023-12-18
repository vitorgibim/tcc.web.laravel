<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $fillable = ['name', 'description'];
    public function schoolSubjects() {
        return $this->belongsToMany(SchoolSubject::class, 'course_school_subject', 'course_id', 'school_subject_id');
    }

    // public function classrooms()
    // {
    //   return $this->belongsToMany(Classroom::class, 'course_classroom', 'course_id', 'classroom_id');
    // }

    // public function teachers() {
    //     return $this->belongsToMany(Teacher::class, 'course_teacher', 'course_id', 'teacher_id');
    // }

    // public function students() {
    //     return $this->belongsToMany(Student::class, 'course_student', 'course_id', 'student_id');
    // }
}
