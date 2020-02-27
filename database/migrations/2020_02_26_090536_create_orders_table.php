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
            $table->integer('order_id')->unique();
            $table->integer('user_id');
            $table->integer('dealer_id');
            $table->string('product_code');
            $table->string('product_name');
            $table->string('product_desc');
            $table->binary('product_image');
            $table->string('product_price');
            $table->string('product_length');
            $table->string('product_dimension');
            $table->date('delivery_date');
            $table->string('order_details');
            $table->string('order_status');
            $table->timestamp('order_date');
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
