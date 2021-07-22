<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paciente extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'paciente';
    protected $fillable = [
        'nombre',
        'edad',
        'genero',
        'fecha_contagio',
        'nivel_educativo',
        'created_by',
        'updated_by'
    ];
}
