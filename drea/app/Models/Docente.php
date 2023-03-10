<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $table = 'docente';
    protected $fillable = ['DNI', 'Nombres', 'Apellidos', 'FechaNacimiento', 'Establecimiento', 'Cargo', 'TipoServidor', 'Celular', 'Correo', 'Direccion' ];
    public $timestamps = false;
    protected $primaryKey = 'DNI';
}
