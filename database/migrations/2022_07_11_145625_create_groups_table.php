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
        Schema::create('groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->integer('course_id')->nullable();
            $table->integer('level_id')->nullable();
            $table->integer('classroom_id')->nullable();
            $table->string('months')->nullable();
            $table->string('days')->nullable();
            $table->time('time_start')->nullable();
            $table->time('time_end')->nullable();
            $table->enum('status',['active','stopped']);
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
        Schema::dropIfExists('groups');
    }
};
