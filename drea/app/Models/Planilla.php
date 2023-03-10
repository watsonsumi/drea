<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planilla extends Model
{
    use HasFactory;
    protected $table = 'haberes_descuentos';
    protected $fillable = ['Basico',
    'Personal',
    'Diferencial',
    'Familiar',
    'Contrato',
    'BonEsp',
    'IGV',
    'DS065',
    'DL26504',
    'DU90',
    'DU073',
    'DU011',
    'SNP',
    'DerraMag',
    'SubcafCus',
    'DL20530',
    'DL19990',
    'FONAVI',
    'DOCENTE_DNI',
    'ESTABLECIMIENTO_Codmodular', 'mes','ano'
];
    public $timestamps = false;
    // protected $primaryKey = 'Codmodular';
}
