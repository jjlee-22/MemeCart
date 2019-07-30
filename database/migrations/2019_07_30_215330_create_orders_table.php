<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function(blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('last', 255);
            $table->string('email', 255);
            $table->string('country', 255);
            $table->string('address_1', 255);
            $table->string('address_2', 255);
            $table->string('city', 255);
            $table->integer('postal');
            $table->string('region', 255);
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
        Schema::dropIfExists('orders');
    }
}
