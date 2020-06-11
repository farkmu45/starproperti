<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('property_status')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('type_id')->references('id')->on('property_types')->onDelete('restrict')->onUpdate('cascade');
            $table->string('title', 60);
            $table->string('location', 70);
            $table->string('direction', 40);
            $table->unsignedFloat('surface_area');
            $table->unsignedFloat('building_area');
            $table->unsignedTinyInteger('bedroom');
            $table->unsignedTinyInteger('bathroom');
            $table->unsignedDecimal('price');
            $table->string('value', 10);
            $table->string('phone_number', 20);
            $table->unsignedSmallInteger('electricity');
            $table->string('water', 20);
            $table->string('legality',20);
            $table->unsignedTinyInteger('garage');
            $table->text('description');
            $table->string('name', 50);
            $table->string('code', 6);
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
        Schema::dropIfExists('properties');
    }
}
