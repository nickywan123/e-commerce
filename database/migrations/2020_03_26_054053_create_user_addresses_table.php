<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('account_id');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('address_3')->nullable();
            $table->integer('postcode');
            $table->string('city');
            $table->integer('state_id');
            $table->integer('is_shipping_address')->default(0);
            $table->integer('is_residential_address')->default(0);
            $table->integer('is_mailing_address')->default(0);
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
        Schema::dropIfExists('user_addresses');
    }
}
