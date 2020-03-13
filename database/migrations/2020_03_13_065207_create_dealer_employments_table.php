<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealerEmploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealer_employments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employment_type_id');
            $table->string('company_name');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('address_3');
            $table->integer('postcode');
            $table->string('city');
            $table->integer('state_id');
            $table->string('business_type');
            $table->string('position_name');
            $table->string('contact_number');
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
        Schema::dropIfExists('dealer_employments');
    }
}
