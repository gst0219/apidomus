<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitaProspectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita_prospectos', function (Blueprint $table) {
            $table->id();
            $table->integer('prospectoid');
            $table->integer('promotorid');
            $table->integer('inmuebleid');
            $table->date('fecha_solicitada');
            $table->integer('tipocita');
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
        Schema::dropIfExists('cita_prospectos');
    }
}
