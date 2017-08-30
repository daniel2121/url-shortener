<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrlShortener extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('url_shorteners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('short_url_id')->unique();
            $table->string('long_url');
            $table->integer('calling_count')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('url_shorteners', function (Blueprint $table) {
            Schema::drop('url_shorteners');
        });
    }
}
