<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTakeUpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('take_up', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('courier_id');
            $table->unsignedBigInteger('shipping_id');

            $table->foreign('courier_id')->references('id')->on('couriers');
            $table->foreign('shipping_id')->references('id')->on('shippings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('take_up');
    }
}
