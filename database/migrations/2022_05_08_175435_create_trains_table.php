<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->string();
            $table->string('company',100);
            $table->string('arrival_station');
            $table->string('departure_station');
            $table->dateTime('departure');
            $table->dateTime('arrival');
            $table->string('code',20);
            $table->unsignedTinyInteger('carriages_number');
            $table->boolean('in_time')->default(true);
            $table->unsignedTinyInteger('deleted')->default(0);
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
        Schema::dropIfExists('trains');
    }
}
