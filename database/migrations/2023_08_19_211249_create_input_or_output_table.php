<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // esto va para el estado de la cerradura, osea para que se vaya guardando si la puerta esta abierta o cerrada
    public function up()
    {
        Schema::create('system_information', function (Blueprint $table) {
            $table->id();
            $table->string('time', 10);
            $table->string('state', 10);
            $table->unsignedBigInteger('id_rfid');
            $table->timestamps();
            $table->foreign('id_rfid')->references('id')->on('rfid');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('system_information');
    }
    
};
