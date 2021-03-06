<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanelInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panel_infos', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('account_id')->unique();
            $table->integer('account_status')->default(0);
            $table->string('company_name');
            $table->string('ssm_number');
            $table->string('company_email');
            $table->string('company_phone');
            $table->string('pic_name');
            $table->string('pic_nric');
            $table->string('pic_contact');
            $table->string('pic_email');
            $table->decimal('panel_rating', 2, 1)->default(0);
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
        Schema::dropIfExists('panel_infos');
    }
}
