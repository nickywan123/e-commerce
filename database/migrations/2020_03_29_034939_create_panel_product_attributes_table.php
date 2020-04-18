<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanelProductAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panel_product_attributes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('panel_product_id');
            $table->string('attribute_type');
            $table->string('attribute_name');
            $table->string('color_hex')->nullable();
            $table->unsignedBiginteger('price')->default(0);
            $table->unsignedBiginteger('member_price')->default(0);
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
        Schema::dropIfExists('panel_product_attributes');
    }
}
