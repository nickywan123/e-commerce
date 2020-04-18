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
            $table->text('product_description')->nullable();
            $table->text('product_material')->nullable();
            $table->text('product_consistency')->nullable();
            $table->text('product_package')->nullable();
            $table->integer('price');
            $table->unsignedBiginteger('member_price')->default(0);
            $table->unsignedBiginteger('delivery_fee')->default(0);
            $table->unsignedBiginteger('installation_fee')->default(0);
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
