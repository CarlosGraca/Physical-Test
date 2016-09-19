<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('telefone');
            $table->string('telemovel');
            $table->string('email');
            $table->integer('sexo');
            $table->date('dt_nasc');
            $table->timestamps();
        });

        Schema::table('sheets', function(Blueprint $table){
            $table->integer('client_id')->unsigned()->index()->defualt(1);
            $table->foreign('client_id')
                  ->references('id')
                  ->on('clients');
        });

        Schema::table('tests', function(Blueprint $table){
            $table->integer('client_id')->unsigned()->index()->defualt(1);
            $table->foreign('client_id')
                  ->references('id')
                  ->on('clients');
        });
    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
