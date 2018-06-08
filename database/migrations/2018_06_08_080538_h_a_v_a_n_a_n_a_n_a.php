<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HAVANANANA extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repo_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('repo_id');
            $table->integer('user_id');
            $table->tinyInteger('chatwork_notification');
            $table->string('chatwork_api_key');
            $table->tinyInteger('email_notification');
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
        //
    }
}
