<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{

    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();


            $table->string('titulo');
            $table->string('slug');

            $table->text('extract')->nullable();
            $table->longText('body')->nullable();


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data');
    }
}
