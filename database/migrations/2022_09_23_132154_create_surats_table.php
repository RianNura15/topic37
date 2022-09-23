<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->string('arti')->nullable();
            $table->string('asma')->nullable();
            $table->string('audio')->nullable();
            $table->integer('ayat')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('nama')->nullable();
            $table->integer('nomor')->nullable();
            $table->integer('rukuk')->nullable();
            $table->string('type')->nullable();
            $table->integer('urut')->nullable();
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
        Schema::table('surats', function (Blueprint $table) {
            Schema::dropIfExists('surats');
        });
    }
}
