<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businessess', function (Blueprint $table) {
            $table->string("business_name");
            $table->string("business_type");
            $table->string("business_description");
            $table->string("business_address");
            $table->string("starting_year");
            $table->string("business_website");
            $table->string("business_hotline");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businessess');
    }
}
