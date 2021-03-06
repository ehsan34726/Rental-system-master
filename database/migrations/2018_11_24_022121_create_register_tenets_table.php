<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterTenetsTable extends Migration
{
    
    public function up()
    {
        Schema::create('register_tenets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('address');
            $table->integer('user_id_fk');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('register_tenets');
    }
}
