<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Exams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('exam_name')->default('');
            $table->timestamps();
        });

        DB::table('exams')->insert([
            [
            'exam_name'      => 'Semester Final',
            'created_at'    =>  Carbon::now()
            ], 
            [
            'exam_name'      => 'Midterm',
            'created_at'    =>  Carbon::now()
            ],
           
        ]);
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
