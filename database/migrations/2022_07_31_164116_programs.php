<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Programs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('shift_name')->default('');
            $table->timestamps();
        });

        DB::table('programs')->insert([
            [
            'shift_name'      => 'Undergraduate',
            'created_at'    =>  Carbon::now()
            ], 
            [
            'shift_name'      => 'Postgraduate',
            'created_at'    =>  Carbon::now()
            ],
            [
            'shift_name'      => 'Diploma',
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
