<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('rfid', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();
    
            $table->foreign('id_user')->references('id')->on('users');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rfid');
    }
    
};
