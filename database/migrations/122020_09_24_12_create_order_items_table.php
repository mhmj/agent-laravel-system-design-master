<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->float('price', 8, 2)->nullable();
            $table->integer('quantity')->nullable();
            $table->float('total', 8, 2)->nullable();
            $table->string('name')->nullable();
            $table->float('weight', 8, 2)->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('order');
            $table->foreign('product_id')->references('id')->on('product');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
