<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('purchase_number');
            $table->string('gateway_string_result');
            $table->string('gateway_response_code');
            $table->string('auth_code');
            $table->string('last_4_card_number');
            $table->string('expiry_date');
            $table->integer('amount');
            $table->string('gateway_eci');
            $table->string('gateway_security_key_res');
            $table->string('gateway_hash');
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
        Schema::dropIfExists('payments');
    }
}
