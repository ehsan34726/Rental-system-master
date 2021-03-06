<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversationsTable extends Migration
{
    
    public function up()
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_1')->unsigned()->nullable();;
            $table->integer('user_2')->unsigned()->nullable();;
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('conversations');
    }
}
