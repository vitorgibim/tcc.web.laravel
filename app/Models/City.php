<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';
    // protected $fillable = ['id_crm', 'usuario_rbx', 'nome_crm'];
    public function student()
    {
        return $this->hasMany(Student::class, 'city_id');
    }
}
