<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->unsignedBigInteger('payment_method_id')->nullable();
            $table->string('bill_id')->nullable();
            $table->integer('total')->nullable();
            $table->string('status')->nullable();
            $table->string('ref_id')->nullable();
            $table->string('deleted_at')->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('order');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment');
    }
}
