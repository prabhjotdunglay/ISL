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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('buyer_id');
            $table->integer('buyerhouse_id');
            $table->integer('firm_id');
            $table->integer('merchandiser_id');
            $table->integer('ordertype_id');
            $table->string('excess');
            $table->string('buyerpo');
            $table->integer('mode_id');
            $table->integer('currency_id');
            $table->integer('season_id');
            $table->integer('style_id');
            $table->integer('shade_id');
            $table->integer('size_id');
            $table->integer('rate');
            $table->string('deliverydate');
            $table->string('totalqty');
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
