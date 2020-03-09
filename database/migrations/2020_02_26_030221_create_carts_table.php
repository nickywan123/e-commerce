<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('product_id');
            $table->bigInteger('product_color_id')->nullable();
            $table->string('product_color')->nullable();
            $table->bigInteger('product_dimension_id')->nullable();
            $table->string('product_dimension')->nullable();
            $table->bigInteger('product_length_id')->nullable();
            $table->string('product_length')->nullable();
            $table->integer('quantity');
            $table->unsignedBigInteger('unit_price');
            $table->unsignedBigInteger('total_price');
            $table->unsignedBigInteger('shipping_fee');
            $table->integer('status')->default(2001);
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
        Schema::dropIfExists('carts');
    }
}
