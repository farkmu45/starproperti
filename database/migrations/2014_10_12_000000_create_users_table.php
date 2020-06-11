<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('photo')->nullable();
            $table->string('phone_number', 15)->unique();
            $table->string('address', 50)->nullable();
            $table->string('whatsapp_number', 15)->nullable();
            $table->string('instagram_link', 20)->nullable();
            $table->string('facebook_link', 20)->nullable();
            $table->string('youtube_link', 20)->nullable();
            $table->string('twitter_link', 20)->nullable();
            $table->string('email')->unique();
            $table->string('id_number', 16)->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
