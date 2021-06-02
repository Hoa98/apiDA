<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_users', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('user_id')->unique();
            $table->string('name')->nullable();
            $table->integer('gender')->default(0);
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('information_users');
    }
}
