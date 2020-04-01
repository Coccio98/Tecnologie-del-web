<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisplayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('display', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('showcase_id');
            $table->unsignedBigInteger('product_id');

            $table->foreign('showcase_id')->references('id')->on('showcases');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('display');
    }
}
