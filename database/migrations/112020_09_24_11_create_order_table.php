<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->unsignedBigInteger('buyer_id')->nullable();
            $table->string('buyer_type')->nullable();
            $table->string('status')->nullable();
            $table->integer('total')->nullable();
            $table->string('shipping_address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('postcode')->nullable();
            $table->string('tracking_no')->nullable();
            $table->string('deleted_at')->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();

            $table->foreign('seller_id')->references('id')->on('users');
            $table->foreign('buyer_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
