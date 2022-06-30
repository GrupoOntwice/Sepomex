<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZipcodesTable extends Migration
{
    public function up()
    {
        Schema::create('zipcodes', function (Blueprint $table) {
            $table->id();
            $table->smallInteger("estado_id")->unsigned();
            $table->string("estado");
            $table->mediumInteger("municipio_id");
            $table->string("municipio");
            $table->string("ciudad")->nullable();
            $table->string("zona");
            $table->integer("codigo_postal");
            $table->string("asentamiento");
            $table->string("tipo");
        });
    }

    public function down()
    {
        Schema::dropIfExists('zipcodes');
    }
}
