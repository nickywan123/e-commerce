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
            $table->integer('ethnicity')->nullable();
            $table->integer('gender')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('occupation')->nullable();
            $table->integer('dealer_id')->nullable();
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
