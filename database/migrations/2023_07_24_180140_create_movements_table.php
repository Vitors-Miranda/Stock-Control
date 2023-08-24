<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movements', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger("stock_requested")
            ->references("id")->on('stocks');

            $table->unsignedBigInteger("stock_sent")
            ->references("id")->on('stock');

            $table->unsignedBigInteger("product_id")
            ->references("id")->on('products');

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
        Schema::dropIfExists('movements');
    }
}
