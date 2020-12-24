<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJazzIdsTable extends Migration
{
    
    public function up()
    {
        Schema::create('jazz_ids', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jazz_transection_id');
            $table->string('contact_no');
            $table->string('advisor_id_fk');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('jazz_ids');
    }
}
