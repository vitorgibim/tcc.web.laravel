<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
  use HasFactory;

  public function schoolSubject()
  {
    return $this->hasMany(SchoolSubject::class);
  }

  public function alunos()  
  {
    return $this->hasMany(Student::class);
  }

//   public function estruturaCurricular() 
//   {
//     return $this->belongsTo(EstruturaCurricular::class);
//   }

}