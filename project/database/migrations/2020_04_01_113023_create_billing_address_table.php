<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_address', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('address_id');
            $table->unsignedBigInteger('payment_methods_id');

            $table->foreign('address_id')->references('id')->on('addresses');
            $table->foreign('payment_methods_id')->references('id')->on('payment_methods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billing_address');
    }
}
