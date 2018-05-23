<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Datas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('data', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->double('longitude');
        //     $table->unsignedInteger('vehicle_id');
        //     $table->foreign('vehicle_id')->references('id')->on('vehicles');

        //     $table->rememberToken();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('data');
    }
}
