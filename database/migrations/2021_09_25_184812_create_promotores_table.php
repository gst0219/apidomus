<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('apellido_p',50);
            $table->string('apellido_m',50);
            $table->integer('numempleado');
            $table->string('email') -> nullable();
            $table->string('password');
            $table->string('curp') -> nullable() ;
            $table->string('rfc') -> nullable();
            $table->string('nss') -> nullable();
            $table->string('foto') -> nulleable();
            $table->date('fecha_nacimiento');
            $table->string('genero',1);
            $table->string('num_telefono',10);
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
        Schema::dropIfExists('promotors');
    }
}
