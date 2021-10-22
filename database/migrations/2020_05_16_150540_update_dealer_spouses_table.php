<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDealerSpousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dealer_spouses', function (Blueprint $table) {
            $table->string('spouse_name')->nullable()->change();
            $table->string('spouse_nric')->nullable()->change();
            $table->string('spouse_date_of_birth')->nullable()->change();
            $table->string('spouse_occupation')->nullable()->change();
            $table->string('spouse_contact_office')->nullable()->change();
            $table->string('spouse_contact_mobile')->nullable()->change();
            $table->string('spouse_email')->nullable()->change();
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
