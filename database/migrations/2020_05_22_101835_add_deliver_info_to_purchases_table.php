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
            $table->string('attention_to')->nullable()->after('receipt_number');
            $table->string('contact_number')->nullable()->after('attention_to');
            $table->string('address_1')->nullable()->after('contact_number');
            $table->string('address_2')->nullable()->after('address_1');
            $table->string('address_3')->nullable()->after('address_2');
            $table->integer('postcode')->nullable()->after('address_3');
            $table->string('city')->nullable()->after('postcode');
            $table->integer('state_id')->nullable()->after('city');
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
