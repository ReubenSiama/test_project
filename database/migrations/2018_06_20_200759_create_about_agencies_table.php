<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_agencies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('agency_id');
            $table->string('contatct_name');
            $table->string('job_title');
            $table->string('website');
            $table->string('base');
            $table->string('industries_specialize');
            $table->string('services_offer');
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
        Schema::dropIfExists('about_agencies');
    }
}
