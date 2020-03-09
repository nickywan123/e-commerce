<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('unique_id');
            $table->string('name');
            $table->unsignedBigInteger('price');
            $table->string('slug');
            $table->text('summary');
            $table->text('description');
            $table->integer('quality_id')->default(1);
            $table->bigInteger('panel_id');
            $table->integer('amount_sold')->default(0);
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
        Schema::dropIfExists('products');
    }
}
