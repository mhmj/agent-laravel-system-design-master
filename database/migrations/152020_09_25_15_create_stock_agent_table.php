<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockAgentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_agent', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agent_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();

            $table->foreign('agent_id')->references('id')->on('agent');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('stock_agent');
    }
}
