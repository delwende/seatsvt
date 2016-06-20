<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnee2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annee2', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('course_id')->unsigned(); 
              $table->foreign('course_id')->references('id')->on('course2'); 
            $table->string('annee');
             $table->string('prof');
             $table->string('examen');
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
        Schema::drop('annee2');
    }
}
