<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolCall extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $fillable = ['date', 'class_id', 'school_subject_id', 'teacher_id', 'status'];
    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }
        
    public function students() {
        return $this->belongsToMany(Student::class);
    }
}
