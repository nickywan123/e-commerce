<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealerContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealer_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('account_id');
            $table->string('contact_num');
            $table->integer('is_home')->default(0);
            $table->integer('is_mobile')->default(0);
            $table->integer('is_office')->default(0);
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
        Schema::dropIfExists('dealer_contacts');
    }
}
