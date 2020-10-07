<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->unsignedBigInteger('role_id')->nullable();
            $table->string('avatar')->nullable();
            $table->string('settings')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('postcode')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('is_admin')->nullable();
            $table->string('nric')->nullable();
            $table->string('city')->nullable();
            $table->string('ssm')->nullable();
            $table->string('company_name')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('payment_api_key')->nullable();
            $table->string('payment_cat_code')->nullable();
            $table->string('remarks')->nullable();
            $table->string('deleted_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

//            $table->foreign('role_id')->references('id')->on('role');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
//        Schema::disableForeignKeyConstraints();

    }
}
