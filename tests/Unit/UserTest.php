<?php

namespace Tests\Unit;

use App\User;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    private $faker;
    private $user;
    private $user_model;
    private $user_table;

    protected function setUp(): void
    {
        parent::setUp();

        $this->faker = Faker::create();
        $this->user_table = 'users';

        $this->user = [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'username' => $this->faker->userName,
            'email' => $this->faker->email,
            'password' => password_hash($this->faker->password, PASSWORD_DEFAULT),
            'avatar_name' => 'avatar.jpg',
            'avatar_path' => 'avatar.jpg'
        ];

        $this->user_model = app()->make(User::class);
    }

    public function test_create_new_user_success()
    {
        $new_user = $this->user_model->create($this->user);

        $this->assertInstanceOf(User::class, $new_user);
        $this->assertEquals($this->user['first_name'], $new_user->first_name);
        $this->assertEquals($this->user['last_name'], $new_user->last_name);
        $this->assertEquals($this->user['password'], $new_user->password);
        $this->assertEquals($this->user['email'], $new_user->email);
        $this->assertEquals($this->user['username'], $new_user->username);
        $this->assertEquals($this->user['avatar_name'], $new_user->avatar_name);
        $this->assertEquals($this->user['avatar_path'], $new_user->avatar_path);

        $this->assertDatabaseHas($this->user_table, [
            'username' => $this->user['username']
        ]);
    }

    public function test_create_user_fail_duplicate_username()
    {
        $this->expectException(QueryException::class);

        $this->user_model->create($this->user);
        $username = $this->user['username'];

        $duplicated_username_user = [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'username' => $username,
            'email' => $this->faker->email,
            'password' => password_hash($this->faker->password, PASSWORD_DEFAULT),
            'avatar_name' => 'avatar.jpg',
            'avatar_path' => 'avatar.jpg'
        ];

        $this->user_model->create($duplicated_username_user);

        $this->assertDatabaseMissing($this->user_table, [
            'email' => $duplicated_username_user['email']
        ]);
    }

    public function test_create_user_fail_duplicate_email()
    {
        $this->expectException(QueryException::class);

        $this->user_model->create($this->user);
        $email = $this->user['email'];

        $duplicated_email_user = [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'username' => $this->faker->userName,
            'email' => $email,
            'password' => password_hash($this->faker->password, PASSWORD_DEFAULT),
            'avatar_name' => 'avatar.jpg',
            'avatar_path' => 'avatar.jpg'
        ];

        $this->user_model->create($duplicated_email_user);

        $this->assertDatabaseMissing($this->user_table, [
            'username' => $duplicated_email_user['username']
        ]);
    }

    public function test_find_user_success()
    {
        $user = $this->user_model->create($this->user);

        $found = $this->user_model->findOrFail($user->id);

        $this->assertInstanceOf(User::class, $found);

        $this->assertEquals($this->user['first_name'], $found->first_name);
        $this->assertEquals($this->user['last_name'], $found->last_name);
        $this->assertEquals($this->user['password'], $found->password);
        $this->assertEquals($this->user['email'], $found->email);
        $this->assertEquals($this->user['username'], $found->username);
        $this->assertEquals($this->user['avatar_name'], $found->avatar_name);
        $this->assertEquals($this->user['avatar_path'], $found->avatar_path);

        $this->assertDatabaseHas($this->user_table, [
            'username' => $this->user['username']
        ]);
    }

    public function test_update_user_success()
    {
        $user = $this->user_model->create($this->user);

        $updated_email = $this->faker->email;

        $updated_success = $user->update([
            'email' => $updated_email
        ]);

        $this->assertTrue($updated_success);
        $this->assertEquals($user->email, $updated_email);

        $this->assertDatabaseHas($this->user_table, [
            'username' => $user->username,
            'email' => $updated_email
        ]);
    }

    public function test_destroy_user_success()
    {
        $user = $this->user_model->create($this->user);

        $deleted_success = $user->delete();

        $this->assertTrue($deleted_success);
        $this->assertSoftDeleted($this->user_table, [
            'username' => $this->user['username']
        ]);
    }
}
