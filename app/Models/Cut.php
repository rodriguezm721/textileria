<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cut extends Model
{
    use HasFactory;

    protected $table = 'cuts';
    public $timestamps = false;
    protected $fillable = [
        'dt_folionum', 
        'dt_clave',
        'dt_color',
        'dt_talla',
        'dt_descripcion',
        'dt_piezas',
        'dt_numbulto',
        'dt_composicion',
        'dt_corte',
        'dt_bano',
        'dt_codhilos',
        'dt_numpedido',
        'dt_status',
        'dt_ingreso',
        'dt_proceso',
        'dt_terminado',
        'dt_entrega',
    ];
}
