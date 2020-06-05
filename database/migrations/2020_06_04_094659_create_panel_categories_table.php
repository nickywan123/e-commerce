<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanelCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panel_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('panel_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('free_delivery_min_price');
            $table->unsignedInteger('delivery_fee_no_purchase');
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
        Schema::dropIfExists('panel_categories');
    }
}
