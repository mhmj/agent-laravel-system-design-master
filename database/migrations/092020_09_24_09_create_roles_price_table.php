<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesPriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_price', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('agent_levels_id')->nullable();
            $table->float('price', 8, 2)->nullable();
            $table->integer('minimum_order')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('postage', 8, 2)->nullable();
            $table->float('postage_west_my', 8, 2)->nullable();
            $table->integer('starter')->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('product');
            $table->foreign('agent_levels_id')->references('id')->on('agent_levels');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_price');
    }
}
