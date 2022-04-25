<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ctr_cuenta_det extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_tipo_movimiento',
        'concepto',
        'monto'
    ];
}