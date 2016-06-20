<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnee1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annee1', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('course_id')->unsigned(); 
             $table->foreign('course_id')->references('id')->on('course1');
            $table->string('annee');
             $table->string('prof');
             $table->string('examen');
             $table->string('date');
              $table->string('file');
             $table->string('type');
              $table->integer('size');
           $table->timestamp('created_at');
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('annee1');
    }
}
