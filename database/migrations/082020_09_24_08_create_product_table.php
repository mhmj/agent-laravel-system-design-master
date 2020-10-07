<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_type_id')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->float('retail_price', 8, 2)->nullable();
            $table->longText('featured_image')->nullable();
            $table->longText('images')->nullable();
            $table->float('weight', 8, 2)->nullable();
            $table->integer('stock')->nullable();
            $table->float('shipping_west_my', 8, 2)->nullable();
            $table->float('shipping_east_my', 8, 2)->nullable();
            $table->float('shipping_bn', 8, 2)->nullable();
            $table->float('shipping_sg', 8, 2)->nullable();
            $table->integer('score')->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();

            $table->foreign('product_type_id')->references('id')->on('product_type');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
