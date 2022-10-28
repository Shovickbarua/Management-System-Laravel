<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->string('grade_name');
            $table->string('grade_point');
            $table->string('start_marks');
            $table->string('end_marks');
            $table->string('start_point');
            $table->string('end_point');
            $table->timestamps();
        });

        DB::table('grades')->insert([
            [
                'grade_name'       =>'A',
                'grade_point'      =>'4',
                'start_marks'      =>'93',
                'end_marks'        =>'100',
                'start_point'      =>'4',
                'end_point'        =>'4',
                'created_at'       => Carbon::now()   
            ],  
            [
                'grade_name'       =>'A-',
                'grade_point'      =>'3.7',
                'start_marks'      =>'90',
                'end_marks'        =>'92',
                'start_point'      =>'3.7',
                'end_point'        =>'3.99',
                'created_at'       => Carbon::now()   
            ],  
            [
                'grade_name'       =>'B+',
                'grade_point'      =>'3.3',
                'start_marks'      =>'87',
                'end_marks'        =>'89',
                'start_point'      =>'3.3',
                'end_point'        =>'3.6',
                'created_at'       => Carbon::now()   
            ],  
            [
                'grade_name'       =>'B',
                'grade_point'      =>'3.0',
                'start_marks'      =>'83',
                'end_marks'        =>'86',
                'start_point'      =>'3.0',
                'end_point'        =>'3.5',
                'created_at'       => Carbon::now()   
            ],  
            [
                'grade_name'       =>'B-',
                'grade_point'      =>'2.7',
                'start_marks'      =>'80',
                'end_marks'        =>'82',
                'start_point'      =>'2.7',
                'end_point'        =>'2.99',
                'created_at'       => Carbon::now()   
            ],[
                'grade_name'       =>'C+',
                'grade_point'      =>'2.3',
                'start_marks'      =>'77',
                'end_marks'        =>'79',
                'start_point'      =>'2.3',
                'end_point'        =>'2.6',
                'created_at'       => Carbon::now()   
            ],  
            [
                'grade_name'       =>'C',
                'grade_point'      =>'2.0',
                'start_marks'      =>'73',
                'end_marks'        =>'76',
                'start_point'      =>'2.0',
                'end_point'        =>'2.2',
                'created_at'       => Carbon::now()   
            ], 
            [
                'grade_name'       =>'C-',
                'grade_point'      =>'1.7',
                'start_marks'      =>'70',
                'end_marks'        =>'72',
                'start_point'      =>'1.7',
                'end_point'        =>'1.99',
                'created_at'       => Carbon::now()   
            ],
            [
                'grade_name'       =>'D+',
                'grade_point'      =>'1.3',
                'start_marks'      =>'67',
                'end_marks'        =>'69',
                'start_point'      =>'1.3',
                'end_point'        =>'1.6',
                'created_at'       => Carbon::now()   
            ],
            [
                'grade_name'       =>'D',
                'grade_point'      =>'1.0',
                'start_marks'      =>'60',
                'end_marks'        =>'66',
                'start_point'      =>'1.0',
                'end_point'        =>'1.2',
                'created_at'       => Carbon::now()   
            ],
            [
                'grade_name'       =>'F',
                'grade_point'      =>'0.0',
                'start_marks'      =>'0',
                'end_marks'        =>'59',
                'start_point'      =>'0.0',
                'end_point'        =>'0.0',
                'created_at'       => Carbon::now()   
            ]
        ]);    
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
