<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['alumno_id', 'curso_id', 'maestro_id', 'tipo_asistencia_id', 'fecha'];
}
