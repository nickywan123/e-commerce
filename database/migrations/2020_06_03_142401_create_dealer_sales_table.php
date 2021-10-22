<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealerSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealer_sales', function (Blueprint $table) {
            $table->string('order_number')->unique();
            $table->unsignedBigInteger('purchase_id');
            $table->unsignedBigInteger('account_id')->nullable();
            $table->unsignedBigInteger('order_status');
            $table->integer('order_amount');
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
        Schema::dropIfExists('dealer_sales');
    }
}
