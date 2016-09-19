<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheets', function (Blueprint $table) {
            $table->increments('id');   
            $table->string('objective');    
            $table->integer('type_student'); 
            $table->string('training_days');    
            $table->date('date_start');
            $table->string('status')->default(1);
            $table->timestamps();
        });

        Schema::table('sheet_details', function(Blueprint $table){
            $table->integer('sheet_id')->unsigned()->index()->defualt(1);
            $table->foreign('sheet_id')
                  ->references('id')
                  ->on('sheets');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sheets');
    }
}
