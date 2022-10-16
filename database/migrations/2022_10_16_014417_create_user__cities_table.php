<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__cities', function (Blueprint $table) {
          $table->unsignedBigInteger('user_id');
          $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
          $table->unsignedBigInteger('city_id');
          $table->foreign('city_id')
            ->references('id')
            ->on('cities')
            ->onDelete('cascade');
          $table->primary(['user_id', 'city_id']);
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
        Schema::dropIfExists('user__cities');
    }
}
