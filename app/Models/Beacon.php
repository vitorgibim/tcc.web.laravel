<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beacon extends Model
{
    use HasFactory;
    protected $table = 'beacons';
    protected $fillable = ['UUID', 'range', 'description'];

    public function teacher(){
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }   
}
