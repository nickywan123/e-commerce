<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanelProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panel_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('global_product_id');
            $table->unsignedBigInteger('panel_account_id');
            $table->text('product_details');
            $table->integer('price');
            $table->integer('quality');
            $table->integer('delivery_fee');
            $table->text('panel_promotion');
            $table->integer('product_rating');
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
        Schema::dropIfExists('panel_products');
    }
}
