<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technologies', function (Blueprint $table) {
            $table->id();
            $table->string('name_es');
            $table->string('name_en')->nullable();
            $table->longText('description_es')->nullable();
            $table->longText('description_en')->nullable();
            $table->longText('url_logo')->nullable();
            $table->unsignedBigInteger('techcategory_id');
            $table->foreign('techcategory_id')->references('id')->on('tech_categories');

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
        Schema::dropIfExists('technologies');
    }
}
