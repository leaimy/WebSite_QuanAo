<?php

namespace Tests\Unit;

use App\Customer;
use App\Order;
use Faker\Factory as Faker;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrderTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->faker = Faker::create();

        $customer = Customer::create([
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'username' => $this->faker->userName,
            'email' => $this->faker->email,
            'password' => password_hash($this->faker->password, PASSWORD_DEFAULT),
            'phone_number' => $this->faker->phoneNumber,
            'street' => '',
            'village' => '',
            'district' => '',
            'province' => '',
        ]);

        $this->order = [
            'customer_id' => $customer->id,
            'total_price' => 100000,
            'discount_percent' => 5,
            'current_status' => 'new web order',
            'order_option' => 'shipping',
        ];

        $this->order_model = app()->make(Order::class);
        $this->order_table = 'orders';
    }

    public function test_create_new_order_success()
    {
        $new_order = $this->order_model->create($this->order);

        $this->assertInstanceOf(Order::class, $new_order);

        $this->assertEquals($this->order['total_price'], $new_order->total_price);
        $this->assertEquals($this->order['current_status'], $new_order->current_status);
        $this->assertEquals($this->order['customer_id'], $new_order->customer_id);
        $this->assertEquals($this->order['discount_percent'], $new_order->discount_percent);
        $this->assertEquals($this->order['order_option'], $new_order->order_option);

        $this->assertDatabaseHas($this->order_table, [
            'customer_id' => $this->order['customer_id']
        ]);
    }

    public function test_create_new_order_fail_invalid_status()
    {
        $this->expectException(QueryException::class);
        $order_data = $this->order;
        $order_data['current_status'] = 'invalid-status';

        $this->order_model->create($order_data);

        $this->assertDatabaseMissing($this->order_table, [
            'customer_id' => $order_data['customer_id']
        ]);
    }

    public function test_create_new_order_fail_invalid_order_option()
    {
        $this->expectException(QueryException::class);
        $order_data = $this->order;
        $order_data['order_option'] = 'invalid-option';

        $this->order_model->create($order_data);

        $this->assertDatabaseMissing($this->order_table, [
            'customer_id' => $order_data['customer_id']
        ]);
    }

    public function test_find_order_success()
    {
        $order = $this->order_model->create($this->order);

        $found = $this->order_model->findOrFail($order->id);

        $this->assertInstanceOf(Order::class, $found);

        $this->assertEquals($this->order['total_price'], $order->total_price);
        $this->assertEquals($this->order['current_status'], $order->current_status);
        $this->assertEquals($this->order['customer_id'], $order->customer_id);
        $this->assertEquals($this->order['discount_percent'], $order->discount_percent);
        $this->assertEquals($this->order['order_option'], $order->order_option);
    }
}
