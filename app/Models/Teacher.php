<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['name','cpf','email','address','address_number','neighborhood','city_id'];
    protected $table = 'teachers';

    public function schoolCalls() {
        return $this->hasMany(SchoolCall::class, 'teacher_id', 'id');
    }
    public function city() {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
    public function beacon() {
        return $this->hasOne(Beacon::class, 'teacher_id', 'id');
    }
    public function schoolSubjects() {
        return $this->belongsToMany(SchoolSubject::class, 'teacher_school_subject', 'teacher_id', 'school_subject_id');
    }
}
