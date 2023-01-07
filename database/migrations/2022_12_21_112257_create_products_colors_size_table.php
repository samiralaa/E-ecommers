<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsColorsSizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_colors_size', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_color_id')->references('id')->on('products_colors')->onDelete('cascade');
            $table->foreignId('product_size_id')->references('id')->on('products_size')->onDelete('cascade');
            $table->integer('quantity');
            $table->decimal('price_tow',8,2)->nullable();
            $table->decimal('discount',8,2)->nullable();
            $table->integer('status')->dufault(1);

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
        Schema::dropIfExists('products_colors_size');
    }
}
