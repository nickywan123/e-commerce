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
            $table->text('panel_promotion');
            $table->text('product_materials');
            $table->integer('price');
            $table->integer('member_price')->default(0);
            $table->integer('delivery_fee')->default(0);
            $table->integer('installation_fee')->default(0);
            $table->decimal('product_rating', 2, 1)->default(0);
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
