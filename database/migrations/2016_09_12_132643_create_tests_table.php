<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estatura');
            $table->double('peso');
            $table->double('dc_tricepts');
            $table->double('soma_dc_triceps_subescapular');
            $table->double('soma5_dc');
            $table->integer('circunferencia');
            $table->integer('cintura');
            $table->integer('quadril');
            $table->integer('coxa');
            $table->integer('panturrilha');
            $table->double('gordura');
            $table->double('peso_corporal_total');
            $table->double('peso_a_perder');
            $table->double('total_agua_corpo');
            $table->double('perc_agua_massa_magra');
            $table->double('taxa_metabolica');
            $table->integer('forca_abdominal');
            $table->integer('forca_mmii');
            $table->integer('flexibilidade');
            $table->integer('forca_mmss');
            $table->double('frequencia_card_rep');
            $table->double('pressao_sis');
            $table->double('pressao_dis');
            $table->double('potencia_aerobica');
            $table->date('dt_test');
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
        Schema::dropIfExists('tests');
    }
}
