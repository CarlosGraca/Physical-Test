<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAlterateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tests', function (Blueprint $table) {

          $table->integer('estatura')->nullable()->change();
          //$table->double('peso')->default('0')->change();
          //$table->double('dc_tricepts')->default('0')->change();
          //$table->double('soma_dc_triceps_subescapular')->default('0')->change();
          //$table->double('soma5_dc')->default('0')->change();
          $table->integer('circunferencia')->nullable()->change();
          $table->integer('cintura')->nullable()->change();
          $table->integer('quadril')->nullable()->change();
          $table->integer('coxa')->nullable()->change();
          $table->integer('panturrilha')->nullable()->change();
          //$table->double('gordura')->default('0')->change();
          //$table->double('peso_corporal_total')->default('0')->change();
          //$table->double('peso_a_perder')->default('0')->change();
          //$table->double('total_agua_corpo')->default('0')->change();
          //$table->double('perc_agua_massa_magra')->default('0')->change();
          //$table->double('taxa_metabolica')->default('0')->change();
          $table->integer('forca_abdominal')->nullable()->change();
          $table->integer('forca_mmii')->nullable()->change();
          $table->integer('flexibilidade')->nullable()->change();
          $table->integer('forca_mmss')->nullable()->change();
          //$table->double('frequencia_card_rep')->default('0')->change();
          //$table->double('pressao_sis')->default('0')->change();
          //$table->double('pressao_dis')->default('0')->change();
          //$table->double('potencia_aerobica')->default('0')->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tests', function (Blueprint $table) {
            //
        });
    }
}
