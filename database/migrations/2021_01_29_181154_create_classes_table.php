<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("title");
            $table->string("section");
            $table->string("description");
            $table->timestamps();
        });

        // DB::table('classes')->insert(
        //     [

        //         'title' => '10th',
        //         'section' => 'Green',
        //         'description' => 'None'
        //     ]
        // );

        // DB::table('classes')->insert(
        //     [

        //         'title' => '10th',
        //         'section' => 'Pink',
        //         'description' => 'None'
        //     ]

        // );

        // DB::table('classes')->insert(
        //     [
        //         'title' => '10th',
        //         'section' => 'Blue',
        //         'description' => 'None'
        //     ]
        // );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
