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
        Schema::create('old_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_id')->unique();
            $table->bigInteger('user_id');
            $table->bigInteger('dealer_id');
            $table->bigInteger('panel_id');
            $table->bigInteger('product_id');
            $table->text('product_information');
            $table->integer('product_quantity');
            $table->unsignedBigInteger('order_price');
            $table->integer('status_id');
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
        Schema::dropIfExists('old_orders');
    }
}
