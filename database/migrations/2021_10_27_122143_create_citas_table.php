<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug');

            $table->text('extract')->nullable();
            $table->longText('body')->nullable();

            $table->date('Fecha');
            $table->time('Hora');

            // Aquí pondré si la cita ha sido aceptada o no, el default es 1, que no es aceptada
            $table->enum('Status', [1,2])->default(1);

            // Los ids que conectan a las solicitudes

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');

            // relaciones con otros

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

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
        Schema::dropIfExists('citas');
    }
}
