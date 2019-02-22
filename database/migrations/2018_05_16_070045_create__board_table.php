<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('boards_of_directors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('board_name');
            $table->string('board_images');
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
 
        
        Schema::drop('boards_of_directors');    
    }
}

