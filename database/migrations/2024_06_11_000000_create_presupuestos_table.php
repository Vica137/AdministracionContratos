<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresupuestosTable extends Migration
{
    public function up()
    {
        Schema::create('presupuestos', function (Blueprint $table) {
            $table->id('idPresupuesto');
            $table->string('localidad');
            $table->string('oficina');
            $table->string('razonSocial');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->string('periodo');
            $table->decimal('monto', 15, 2);
            $table->integer('idCedi');
            $table->integer('idProveedor');
            $table->integer('idProyecto');
            $table->integer('idEmpresa');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('presupuestos');
    }
}

