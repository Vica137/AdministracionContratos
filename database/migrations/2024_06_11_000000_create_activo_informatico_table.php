<?php

// database/migrations/2024_06_11_000000_create_activo_informatico_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivoInformaticoTable extends Migration
{
    public function up()
    {
        Schema::create('activoInformatico', function (Blueprint $table) {
            $table->integer('idActivoInformatico')->primary();
            $table->string('nombre', 40);
            $table->string('categoria', 1);
            $table->integer('idSubcategoria');
        });
    }

    public function down()
    {
        Schema::dropIfExists('activoInformatico');
    }
}




?>
