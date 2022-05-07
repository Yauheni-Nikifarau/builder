<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonesMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones_meta', function (Blueprint $table) {
            $table->id();
            $table->foreignId('phone_id')->unsigned();
            $table->text('key');
            $table->integer('value');
            $table->foreign('phone_id')->references('id')->on('phones')->onDelete('cascade');
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
        Schema::dropIfExists('phones_meta');
    }
}
