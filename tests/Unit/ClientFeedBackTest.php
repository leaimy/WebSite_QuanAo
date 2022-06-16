<?php

namespace Tests\Unit;

use App\ClientFeedBack;
use Faker\Factory as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ClientFeedBackTest extends TestCase
{
    use RefreshDatabase;

    private $feedback;
    private $feedback_table;
    private $feedback_model;

    protected function setUp(): void
    {
        parent::setUp();
        $this->faker = Faker::create();

        $this->feedback = [
            'content' => $this->faker->paragraph,
            'author_info' => $this->faker->name,
            'image_name' => 'image.jpg',
            'image_path' => 'image.jpg',
            'status' => true
        ];

        $this->feedback_table = 'client_feedbacks';
        $this->feedback_model = app()->make(ClientFeedBack::class);
    }

    public function test_create_feedback_success()
    {
        $new_feedback = $this->feedback_model->create($this->feedback);

        $this->assertInstanceOf(ClientFeedBack::class, $new_feedback);

        $this->assertEquals($this->feedback['content'], $new_feedback->content);
        $this->assertEquals($this->feedback['image_path'], $new_feedback->image_path);
        $this->assertEquals($this->feedback['image_name'], $new_feedback->image_name);
        $this->assertEquals($this->feedback['author_info'], $new_feedback->author_info);
        $this->assertEquals($this->feedback['status'], $new_feedback->status);

        $this->assertDatabaseHas($this->feedback_table, [
            'author_info' => $this->feedback['author_info']
        ]);
    }

    public function test_find_feedback_success()
    {
        $feedback = $this->feedback_model->create($this->feedback);

        $found = $this->feedback_model->findOrFail($feedback->id);

        $this->assertInstanceOf(ClientFeedBack::class, $found);

        $this->assertEquals($this->feedback['content'], $found->content);
        $this->assertEquals($this->feedback['image_path'], $found->image_path);
        $this->assertEquals($this->feedback['image_name'], $found->image_name);
        $this->assertEquals($this->feedback['author_info'], $found->author_info);
        $this->assertEquals($this->feedback['status'], $found->status);
    }

    public function test_update_feedback_success()
    {
        $feedback = $this->feedback_model->create($this->feedback);

        $updated_success = $feedback->update([
            'status' => false
        ]);

        $this->assertTrue($updated_success);
        $this->assertEquals(false, $feedback->status);

        $this->assertDatabaseHas($this->feedback_table, [
            'author_info' => $feedback->author_info,
            'status' => false
        ]);
    }

    public function test_destroy_feedback()
    {
        $feedback = $this->feedback_model->create($this->feedback);

        $deleted_success = $feedback->delete();

        $this->assertTrue($deleted_success);
        $this->assertSoftDeleted($this->feedback_table, [
            'author_info' => $this->feedback['author_info']
        ]);
    }
}
