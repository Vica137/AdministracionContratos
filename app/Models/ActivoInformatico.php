<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivoInformatico extends Model
{
    protected $table = 'activoInformatico';
    protected $primaryKey = 'idActivoInformatico';
    public $timestamps = false;

    protected $fillable = [
        'idActivoInformatico',
        'nombre',
        'categoria',
        'idSubcategoria'
    ];
}


?>
