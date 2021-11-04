<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->id();
            $table->string('modelo',50);
            $table->decimal('valor',19,2);
            $table->integer('superficieplana');
            $table->integer('construccion') -> nullable();
            $table->integer('habitaciones') -> nullable();
            $table->integer('banos');
            $table->integer('cochera') -> nullable() ;
            $table->integer('plazas') -> nullable();
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
        Schema::dropIfExists('inmuebles');
    }
}
