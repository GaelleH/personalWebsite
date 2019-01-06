<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_title');
            $table->string('sub_site_title');
            $table->string('accent_button_text');
            $table->string('block_site_title');
            $table->longText('block_site_text');
            $table->string('contact_site_title');
            $table->string('sub_contact_site_title');
            $table->string('dark_button_text');
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
        Schema::dropIfExists('settings');
    }
}
