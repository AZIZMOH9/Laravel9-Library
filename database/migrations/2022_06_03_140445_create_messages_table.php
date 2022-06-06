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
            $table->id()->autoIncrement();
            $table->string('name',50)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('email',50)->nullable();
            $table->string('subject',100)->nullable();
            $table->string('message')->nullable();
            $table->string('note',100)->nullable();
            $table->string('ip',50)->nullable();
            $table->string('status',50)->nullable()->default('new');
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
