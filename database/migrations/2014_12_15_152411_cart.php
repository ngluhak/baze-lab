<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id();            
            $table->decimal('total_value')->nullable();

            $table->foreignId('user_id')->constrained('users');
            
        });

        Schema::create('cart_item', function (Blueprint $table) {
            $table->id();            

            $table->foreignId('cart_id')->constrained('cart');
            $table->foreignId('products_id')->constrained('products');

            $table->decimal('total_value')->nullable();

            
            //$table->primary(['cart_id','products_id']);
            //iz nekog razloga mi javlja grešku da ne mogu ubaciti više primary key-eva
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
        Schema::dropIfExists('cart_item');
        
    }
}
