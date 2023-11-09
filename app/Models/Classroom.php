<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    protected $table = 'classrooms';
    protected $fillable = ['number', 'description'];


    public function courses() 
    {
        return $this->belongsToMany(Course::class, 'course_classroom', 'classroom_id', 'course_id');
    }   
}
