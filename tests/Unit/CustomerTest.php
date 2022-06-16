<?php

namespace Tests\Unit;

use App\Customer;
use Faker\Factory as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CustomerTest extends TestCase
{
    use RefreshDatabase;

    private $faker;
    private $customer;
    private $customer_model;
    private $customer_table;

    protected function setUp(): void
    {
        parent::setUp();

        $this->faker = Faker::create();
        $this->customer_table = 'customers';

        $this->customer = [
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
        ];

        $this->customer_model = app()->make(Customer::class);
    }

    public function test_create_new_customer_success()
    {
        $new_customer = $this->customer_model->create($this->customer);

        $this->assertInstanceOf(Customer::class, $new_customer);

        $this->assertEquals($this->customer['first_name'], $new_customer->first_name);
        $this->assertEquals($this->customer['last_name'], $new_customer->last_name);
        $this->assertEquals($this->customer['username'], $new_customer->username);
        $this->assertEquals($this->customer['email'], $new_customer->email);
        $this->assertEquals($this->customer['phone_number'], $new_customer->phone_number);
        $this->assertEquals($this->customer['district'], $new_customer->district);
        $this->assertEquals($this->customer['province'], $new_customer->province);
        $this->assertEquals($this->customer['street'], $new_customer->street);
        $this->assertEquals($this->customer['village'], $new_customer->village);

        $this->assertDatabaseHas($this->customer_table, [
            'username' => $this->customer['username']
        ]);
    }

    public function test_find_user_success()
    {
        $customer = $this->customer_model->create($this->customer);

        $found = $this->customer_model->findOrFail($customer->id);

        $this->assertInstanceOf(Customer::class, $found);

        $this->assertEquals($this->customer['first_name'], $found->first_name);
        $this->assertEquals($this->customer['last_name'], $found->last_name);
        $this->assertEquals($this->customer['username'], $found->username);
        $this->assertEquals($this->customer['email'], $found->email);
        $this->assertEquals($this->customer['phone_number'], $found->phone_number);
        $this->assertEquals($this->customer['district'], $found->district);
        $this->assertEquals($this->customer['province'], $found->province);
        $this->assertEquals($this->customer['street'], $found->street);
        $this->assertEquals($this->customer['village'], $found->village);

        $this->assertDatabaseHas($this->customer_table, [
            'username' => $customer->username
        ]);
    }

    public function test_update_user_success()
    {
        $customer = $this->customer_model->create($this->customer);

        $updated_email = $this->faker->email;

        $updated_success = $customer->update([
            'email' => $updated_email
        ]);

        $this->assertTrue($updated_success);
        $this->assertEquals($customer->email, $updated_email);

        $this->assertDatabaseHas($this->customer_table, [
            'username' => $customer->username,
            'email' => $updated_email
        ]);
    }

    public function test_destroy_user_success()
    {
        $customer = $this->customer_model->create($this->customer);

        $deleted_success = $customer->delete();

        $this->assertTrue($deleted_success);
        $this->assertDatabaseMissing($this->customer_table, [
            'username' => $this->customer['username']
        ]);
    }
}
