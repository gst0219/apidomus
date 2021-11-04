<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtapasDesarrollosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etapas_desarrollos', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_etapa' );
            $table->string('campo',50);
            $table->integer('estado_etapa' );
            $table->integer('sectorid');
            $table->integer('numero_casas') -> nullable();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('promotorid');
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
        Schema::dropIfExists('etapas_desarrollos');
    }
}
