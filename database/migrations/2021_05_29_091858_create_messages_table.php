<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('from_user_id');
            $table->uuid('to_user_id');
            $table->string('type',30)->nullable();
            $table->string('file_format',50)->nullable();
            $table->string('file_path')->nullable();
            $table->longText('message');
            $table->date('date');
            $table->string('time',25);
            $table->ipAddress('ip')->nullable();
            $table->SoftDeletes();
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
        Schema::dropIfExists('messages');
    }
}
