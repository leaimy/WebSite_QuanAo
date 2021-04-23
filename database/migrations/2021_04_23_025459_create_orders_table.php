<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();

            $table->bigInteger('customer_id');
            $table->integer('total_price');
            $table->integer('discount_percent');
            $table->enum('current_status', [
                'cancelled', 'new web order', 'new phone order',
                'approved', 'packed', 'ready for delivery',
                'processing', 'shipped'
            ]);
            $table->enum('order_option', [
                'buy at store',
                'shipping'
            ]);

            $table->timestamps();

            $table->foreign('customer_id')
                ->references('id')
                ->on('customers')
                ->onDelete('cascade');
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
