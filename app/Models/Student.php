<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name','ra','cpf','email','address','address_number','neighborhood','city_id','course_id'];

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function schoolCalls() {
        return $this->belongsToMany(SchoolCall::class, 'student_school_call','student_id', 'school_call_id');
        }
}
