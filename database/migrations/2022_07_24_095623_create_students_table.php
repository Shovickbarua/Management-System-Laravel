<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('stuName');
            $table->string('fName');
            $table->string('mName');
            $table->string('email')->unique();
            $table->integer('mobile')->nullable();
            $table->string('address');
            $table->string('gender');
            $table->string('religion');
            $table->string('program');
            $table->integer('discount')->nullable();
            $table->integer('id_no');
            $table->date('dob');
            $table->integer('year_id');
            $table->integer('course_id');
            $table->integer('dep_id');
            $table->integer('sem_id');
            $table->integer('shift_id');
            $table->string('image');
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
        Schema::dropIfExists('students');
    }
}
