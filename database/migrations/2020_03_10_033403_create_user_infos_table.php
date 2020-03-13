<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->integer('user_id');
            $table->string('full_name');
            $table->string('nric');
            $table->integer('race')->nullable();
            $table->integer('gender')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->integer('marital_status_id');
            $table->unsignedBigInteger('dealer_id')->nullable();
            $table->unsignedBigInteger('referrer_id')->nullable();
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
        Schema::dropIfExists('user_infos');
    }
}
