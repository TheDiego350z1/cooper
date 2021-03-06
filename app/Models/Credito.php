<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
    use HasFactory;

    protected $fillable = [
        'socio_id',
        'tipo_credito_id',
        'monto',
        'saldo_actual',
        'porcentaje_interes',
        'estado'
    ];

    public function socio()
    {
        return $this->belongsTo(Crm_socios::class, 'socio_id');
    }

    public function tipoCredito()
    {
        return $this->belongsTo(TipoCredito::class, 'tipo_credito_id');
    }
}
