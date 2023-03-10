<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    use HasFactory;
    protected $table = 'establecimiento';
    protected $fillable = ['Codmodular', 'Ugel', 'NombreEstablecimiento', 'Nivel' ];
    public $timestamps = false;
    protected $primaryKey = 'Codmodular';
}
