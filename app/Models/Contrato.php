<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table = 'contrato';
    protected $primaryKey = 'idContrato';
    public $timestamps = false;

    protected $fillable = [
        'idContrato', 'anio', 'estatus'
    ];
}

