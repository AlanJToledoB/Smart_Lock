<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // esta tabla muestra el resultado del tiempo de la entrada y la salida de la puerta
    public function up()
    {
        Schema::create('input_or_output', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user'); // Cambiado de 'id_rfid' a 'id_user'
            $table->unsignedBigInteger('id_rfid'); // Mantenido para referencia a rfid
            $table->integer('time');
            $table->timestamps();
            // Llave foránea para id_user
            $table->foreign('id_user')->references('id')->on('users');
            // Llave foránea para id_rfid
            $table->foreign('id_rfid')->references('id')->on('rfid');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('input_or_output');
    }
};
