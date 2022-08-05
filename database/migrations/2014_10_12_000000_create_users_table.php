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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name','60');
            $table->string('username','50')->nullable()->unique();
            $table->string('nickname','50')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->text('bio')->nullable();
            $table->string('age')->nullable();
            $table->string('job')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone2')->nullable();
            $table->string('address')->nullable();
            $table->string('postal_code','40')->nullable();
            $table->string('location')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('level_id')->nullable();
            $table->integer('group_id')->nullable();
            $table->integer('subject_id')->nullable();
            $table->date('test_date')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('AskFM')->nullable();
            $table->string('whatsApp')->nullable();
            $table->string('YouTube')->nullable();
            $table->string('website')->nullable();
            $table->decimal('salary')->nullable();
            $table->string('api_token','100')->nullable();
            $table->enum('userType',['admin','student','instructor'])->nullable();
            $table->enum('status',['active','stopped']);
            $table->enum('gender',['male','female'])->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
