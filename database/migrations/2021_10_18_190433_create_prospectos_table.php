<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProspectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('apellido_p',50);
            $table->string('apellido_m',50);
            $table->string('genero',1) -> nullable();
            $table->string('estadoCivil') -> nullable();
            $table->string('nss');
            $table->string('curp') -> nullable() ;
            $table->string('tipoCredito') -> nullable();
            $table->date('fecha_nacimiento')  -> nullable();
            $table->string('num_telefono',10)-> nullable();
            $table->date('fecha_captura')  -> nullable();
            $table->string('anticipo',1)  -> nullable();
            $table->integer('promotorid')  -> nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prospectos');
    }
}
