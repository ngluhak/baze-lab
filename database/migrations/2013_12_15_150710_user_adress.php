<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserAdress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_adress', function (Blueprint $table) {
            $table->id();
            $table->string('street_name', 50);
            $table->string('city_name', 50);
            $table->string('country_name', 50);
            $table->integer('house_number')->nullable();
            $table->double('postal_code')->nullable();
            $table->double('telephone')->nullable();

            $table->foreignId('user_id')->constrained('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_adress');
    }
}
