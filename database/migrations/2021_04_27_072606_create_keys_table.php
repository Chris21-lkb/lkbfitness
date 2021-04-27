<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keys', function (Blueprint $table) {
            $table->id();
            $table->string('tilteOne');
            $table->longText('contentone');
            $table->string('tilteTwo');
            $table->longText('contenttwo');
            $table->string('tilteThree');
            $table->longText('contentthree');
            $table->string('tilteFour');
            $table->longText('contentfour');
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
        Schema::dropIfExists('keys');
    }
}