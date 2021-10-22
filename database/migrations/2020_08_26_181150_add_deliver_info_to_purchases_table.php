<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeliverInfoToPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('purchases', function (Blueprint $table) {
            Schema::table('purchases', function (Blueprint $table) {
                $table->string('ship_full_name')->nullable()->after('receipt_number');
                $table->string('ship_contact_num')->nullable()->after('ship_full_name');
                $table->string('ship_address_1')->nullable()->after('ship_contact_num');
                $table->string('ship_address_2')->nullable()->after('ship_address_1');
                $table->string('ship_address_3')->nullable()->after('ship_address_2');
                $table->integer('ship_postcode')->nullable()->after('ship_address_3');
                $table->string('ship_city')->nullable()->after('ship_postcode');
                $table->integer('ship_state_id')->nullable()->after('ship_city');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('purchases', function (Blueprint $table) {
            //
        });
    }
}
