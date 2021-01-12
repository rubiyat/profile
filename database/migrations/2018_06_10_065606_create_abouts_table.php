<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('about_me')->nullable();
            $table->string('address',200)->nullable();
            $table->string('phone',50);
            $table->string('email',50);
            $table->string('designation',100);
            $table->string('profile_image',220)->nullable();
            $table->string('cv',230)->nullable();
            $table->string('fb',200)->nullable();
            $table->string('tw',200)->nullable();
            $table->string('li',200)->nullable();
            $table->string('google',200)->nullable();
            $table->string('git',200)->nullable();
            $table->string('bitbucket',200)->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
