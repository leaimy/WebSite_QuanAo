<?php

namespace Tests\Unit;

use App\Slider;
use Faker\Factory as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SliderTest extends TestCase
{
    use RefreshDatabase;

    private $slider;
    private $slider_table;
    private $slider_model;

    protected function setUp(): void
    {
        parent::setUp();
        $this->faker = Faker::create();

        $this->slider_table = 'sliders';

        $this->slider = [
            'title' => $this->faker->title,
            'content' => $this->faker->paragraph,
            'image_name' => 'image.jpg',
            'image_path' => 'image.jpg',
            'status' => true
        ];

        $this->slider_model = app()->make(Slider::class);
    }

    public function test_create_new_slider_success()
    {
        $new_slider = $this->slider_model->create($this->slider);

        $this->assertInstanceOf(Slider::class, $new_slider);

        $this->assertEquals($this->slider['title'], $new_slider->title);
        $this->assertEquals($this->slider['content'], $new_slider->content);
        $this->assertEquals($this->slider['status'], $new_slider->status);
        $this->assertEquals($this->slider['image_name'], $new_slider->image_name);
        $this->assertEquals($this->slider['image_path'], $new_slider->image_path);

        $this->assertDatabaseHas($this->slider_table, [
            'title' => $this->slider['title']
        ]);
    }

    public function test_find_slider_success()
    {
        $slider = $this->slider_model->create($this->slider);

        $found = $this->slider_model->findOrFail($slider->id);

        $this->assertInstanceOf(Slider::class, $found);

        $this->assertEquals($this->slider['title'], $found->title);
        $this->assertEquals($this->slider['content'], $found->content);
        $this->assertEquals($this->slider['status'], $found->status);
        $this->assertEquals($this->slider['image_name'], $found->image_name);
        $this->assertEquals($this->slider['image_path'], $found->image_path);
    }

    public function test_update_slider_success()
    {
        $slider = $this->slider_model->create($this->slider);

        $updated_success = $slider->update([
            'status' => false
        ]);

        $this->assertTrue($updated_success);
        $this->assertEquals(false, $slider->status);

        $this->assertDatabaseHas($this->slider_table, [
            'title' => $slider->title,
            'status' => false
        ]);
    }

    public function test_destroy_slider_success()
    {
        $slider = $this->slider_model->create($this->slider);

        $deleted_success = $slider->delete();

        $this->assertTrue($deleted_success);
        $this->assertSoftDeleted($this->slider_table, [
            'title' => $this->slider['title']
        ]);
    }
}
