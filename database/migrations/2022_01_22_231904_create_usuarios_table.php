<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->require();
            
            $table->unsignedBigInteger('cola_id')->nullable();
            $table->unsignedBigInteger('atencione_id')->nullable();

            $table->foreign('cola_id')
            ->references('id')
            ->on('colas')
            ->onDelete('set null');

            $table->foreign('atencione_id')
            ->references('id')
            ->on('atenciones')
            ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
