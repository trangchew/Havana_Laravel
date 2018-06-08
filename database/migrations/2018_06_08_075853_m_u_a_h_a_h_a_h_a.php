<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MUAHAHAHA extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muhaha', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('node_id');
            $table->integer('build_id');
            $table->integer('number');
            $table->string('status');
            $table->integer('exit_code');
            $table->integer('started');
            $table->integer('enqueued');
            $table->integer('finished');
            $table->string('environment');
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
        Schema::table('muahaha', function (Blueprint $table) {
            //
        });
    }
}
