<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->string('order_number')->unique();
            $table->unsignedBigInteger('purchase_id');
            $table->unsignedBigInteger('panel_id');
            $table->unsignedBigInteger('order_status');
            $table->integer('order_amount');
            $table->string('delivery_date')->nullable();;
            $table->string('received_date')->nullable();
            $table->string('claim_status');

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
        Schema::dropIfExists('orders');
    }
}
