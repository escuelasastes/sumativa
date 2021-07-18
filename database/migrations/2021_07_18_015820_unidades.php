<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Unidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('numUnidad');
            $table->string('competEspTema');
            $table->string('nomunidad');
            $table->bigInteger('temas_id')->unsigned();
            $table->foreign('temas_id')
                    ->references('id')
                    ->on('temas');
            $table->bigInteger('subtemas_id')->unsigned();
            $table->foreign('subtemas_id')
                    ->references('id')
                    ->on('subtemas');
            $table->bigInteger('estrat_ins_id')->unsigned();
            $table->foreign('estrat_ins_id')
                   ->references('id')
                   ->on('estrat_ins');
            $table->bigInteger('prodespers_id')->unsigned();
            $table->foreign('prodespers_id')
                          ->references('id')
                          ->on('prodespers');
            $table->bigInteger('sisevals_id')->unsigned();
            $table->foreign('sisevals_id')
                   ->references('id')
                   ->on('sisevals');
            $table->bigInteger('examenes_id')->unsigned();
             $table->foreign('examenes_id')
                    ->references('id')
                    ->on('examenes');
            $table->bigInteger('planpros_id')->unsigned();
            $table->foreign('planpros_id')
                           ->references('id')
                           ->on('planpros');
            
                   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
