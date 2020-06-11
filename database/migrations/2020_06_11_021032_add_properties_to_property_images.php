<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPropertiesToPropertyImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('property_images', function (Blueprint $table) {
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('property_images', function (Blueprint $table) {
            //
        });
    }
}
