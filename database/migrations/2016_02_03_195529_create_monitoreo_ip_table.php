<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonitoreoIpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitoreo_ip', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip', 16);
            $table->string('usuario');
            $table->date('fecha');
            $table->time('hora');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('monitoreo_ip');
    }
}
