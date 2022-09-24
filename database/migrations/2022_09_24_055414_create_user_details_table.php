<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->string('firstname',50)->nullable();
            $table->string('lastname',50)->nullable();
            $table->string('email',50)->nullable();
            $table->string('phone',50)->nullable();
            $table->string('username',50)->nullable();
            $table->string('birthDate',50)->nullable();
            $table->string('bank',255)->nullable();
            $table->string('hair',50)->nullable();
            $table->string('height',50)->nullable();
            $table->string('weight',50)->nullable();
            $table->text('address')->nullable();
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
        Schema::dropIfExists('user_details');
    }
}
