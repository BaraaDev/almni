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
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->text('short_description');
            $table->date('course_date');
            $table->decimal('price');
            $table->decimal('discount')->nullable();
            $table->integer('level_id')->nullable();
            $table->integer('subject_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('instructor_id')->nullable();
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
        Schema::dropIfExists('courses');
    }
};
