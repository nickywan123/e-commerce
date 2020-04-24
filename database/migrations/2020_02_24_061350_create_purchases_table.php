<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('purchase_number')->unique();
            $table->integer('purchase_status');
            $table->string('purchase_type')->nullable();
            $table->string('purchase_date');
            $table->integer('purchase_amount');
            $table->string('offline_reference')->nullable();
            $table->string('payment_proof')->nullable();
            $table->string('offline_payment_amount')->default(0);
            $table->string('receipt_number');
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
        Schema::dropIfExists('purchases');
    }
}
