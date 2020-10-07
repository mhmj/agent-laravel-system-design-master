<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('agent_levels_id')->nullable();
            $table->unsignedBigInteger('leader_id')->nullable();
            $table->unsignedBigInteger('territory_id')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->string('member_no')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('country')->nullable();
            $table->string('paid')->nullable();
            $table->string('status')->nullable();
            $table->string('deleted_at')->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('agent_levels_id')->references('id')->on('agent_levels');
            $table->foreign('leader_id')->references('id')->on('users');
            $table->foreign('territory_id')->references('id')->on('territories');
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
        Schema::dropIfExists('agent');
    }
}
