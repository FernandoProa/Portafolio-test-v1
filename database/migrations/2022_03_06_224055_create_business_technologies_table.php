<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessTechnologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses_technologies', function (Blueprint $table) {
            $table->unsignedBigInteger('technology_id');
            $table->unsignedBigInteger('business_id');
            $table->foreign('technology_id')->references('id')->on('technologies');

            $table->foreign('business_id')->references('id')->on('businesses');
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
        Schema::dropIfExists('business_technologies');
    }
}
