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
            $table->string('address')->nullable();
            $table->string('gender');
            $table->string('religion');
            $table->string('stu_id');
            $table->integer('discount')->nullable();
            $table->date('dob');
            $table->integer('year_id');
            $table->integer('course_id');
            $table->integer('dep_id');
            $table->integer('sem_id');
            $table->integer('shift_id')->nullable();
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
