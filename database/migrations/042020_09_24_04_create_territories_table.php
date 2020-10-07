<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerritoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('territories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->integer('quota')->nullable();
            $table->string('status')->nullable();
            $table->integer('total')->nullable();
            $table->string('deleted_at')->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();

            $table->foreign('state_id')->references('id')->on('states');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('territories');
    }
}
