<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('long_description');
            $table->text('short_description');
            $table->integer('phone');
            $table->integer('phone2');
            $table->string('email');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('whatsApp');
            $table->string('YouTube');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
