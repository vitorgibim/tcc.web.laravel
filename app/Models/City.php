<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';
    // protected $fillable = ['id_crm', 'usuario_rbx', 'nome_crm'];
    public function students()
    {
        return $this->hasMany(Student::class, 'city_id');
    }
    
    public function teachers()
    {
        return $this->hasMany(Teacher::class, 'city_id');
    }
}
