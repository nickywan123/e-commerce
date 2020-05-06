<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateGlobalProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('global_products', function (Blueprint $table) {
            $table->string('product_code')->nullable()->change();
            $table->string('product_code')->nullable()->change();
            $table->string('name')->nullable()->change();
            $table->string('name_slug')->nullable()->change();
            $table->text('details')->nullable()->change();
            $table->text('description')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
