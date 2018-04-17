<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Accounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->nestedSet();
            $table->string('value');
            $table->string('text');
            $table->boolean('opened')->default(false);
            $table->boolean('selected')->default(false);
            $table->boolean('disabled')->default(false);
            $table->boolean('loading')->default(false);
            $table->string('icon')->default("");
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::table('accounts', function (Blueprint $table) {
            $table->dropNestedSet();
        });
        Schema::dropIfExists('accounts');
    }
}
