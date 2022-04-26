<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ctr_cuenta extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_cuenta',
        'crm_socio_id',
        'crc_topo_cuenta_id',
        'saldo_actual',
        'estado',
    ];

    public function socio()
    {
        return $this->belongsTo(Crm_socios::class, 'crm_socio_id');
    }

    public function tipoCuenta()
    {
        return $this->belongsTo(Crc_tipos_cuenta::class, 'crc_topo_cuenta_id');
    }

    public function movimientos()
    {
        return $this->hasMany(Ctr_cuenta_det::class, 'ctr_cuentas_id');
    }
}
