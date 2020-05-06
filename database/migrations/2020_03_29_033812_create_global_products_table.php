<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlobalProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('global_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_code');
            $table->string('name');
            $table->string('name_slug');
            $table->text('details');
            $table->text('description');
            $table->integer('quality_id')->default(1);
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
        Schema::dropIfExists('global_products');
    }
}
