<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->double('price', 10, 2)->default(0);
            $table->text('summary');
            $table->longtext('description');
            $table->mediumtext('details');
            $table->tinyInteger('sale')->default(0);
            $table->timestamps();
            $table->unsignedBigInteger('brand_id');
            $table->tinyInteger('score')->default(0);

            $table->foreign('brand_id')->references('id')->on('brands')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
