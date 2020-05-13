<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('number', 11)->unique();
            $table->string('total', 100);
            $table->date('delivery_date')->default('2030-12-31');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('payment_method_id');
            $table->unsignedBigInteger('address_id');
            $table->unsignedBigInteger('shipping_id')->default('1');
            $table->unsignedBigInteger('courier_id')->default('1');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods');
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->foreign('shipping_id')->references('id')->on('shippings');
            $table->foreign('courier_id')->references('id')->on('couriers');
        });
    }
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
