<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolCall extends Model
{
    use HasFactory;
    protected $table = 'school_calls';
    protected $fillable = ['date', 'class_id', 'school_subject_id', 'teacher_id', 'status'];
    public function teacher() {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
        
    public function schoolSubject() {
        return $this->belongsTo(SchoolSubject::class, 'school_subject_id');
    }

    public function classroom() {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }

    public function students() {
        return $this->belongsToMany(Student::class, 'student_school_call','student_id', 'school_call_id');
    }
}
