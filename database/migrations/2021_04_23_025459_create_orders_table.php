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

            $table->unsignedBigInteger('customer_id');
            $table->integer('total_price');
            $table->string('note');
            $table->integer('discount_percent');
            $table->enum('current_status', [
                'cancelled', 'new_web_order', 'new_phone_order',
                'approved', 'packed', 'ready_for_delivery',
                'processing', 'shipped'
            ]);
            $table->enum('order_option', [
                'buy_at_store',
                'shipping'
            ]);

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            $table->softDeletes();
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
