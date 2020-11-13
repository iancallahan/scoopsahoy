<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('order_id');
            $table->bigInteger('rockyroad');
            $table->bigInteger('cookiesandcream');
            $table->bigInteger('chocolate');
            $table->bigInteger('vanilla');
            $table->bigInteger('sprinkles');
            $table->bigInteger('caramel');
            $table->bigInteger('eminems');
            $table->bigInteger('cherries');
            $table->boolean('cone');
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
