<?php

namespace Tests\Unit;

use App\Category;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Faker\Factory as Faker;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->faker = Faker::create();
        $this->category = [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'parent_id' => 0
        ];

        $this->category_model = app()->make(Category::class);
    }

    public function test_create_new_category_success()
    {
        $new_category = $this->category_model->create($this->category);

        $this->assertInstanceOf(Category::class, $new_category);
        $this->assertEquals($this->category['name'], $new_category->name);
        $this->assertEquals($this->category['slug'], $new_category->slug);
        $this->assertDatabaseHas('categories', [
            'name' => $this->category['name'],
        ]);
    }

    public function test_create_new_category_fail_due_to_invalid_status()
    {
        $this->expectException(QueryException::class);

        $category_data = $this->category;
        $category_data['status'] = 'invalid category status';

        $this->category_model->create($category_data);

        $this->assertDatabaseMissing('categories', [
            'name' => $category_data['name']
        ]);
    }

    public function test_find_category_success()
    {
        $category = $this->category_model->create($this->category);

        $found = $this->category_model->findOrFail($category->id);

        $this->assertInstanceOf(Category::class, $found);
        $this->assertEquals($this->category['name'], $found->name);
        $this->assertEquals($this->category['slug'], $found->slug);
    }

    public function test_update_category_success()
    {
        $category = $this->category_model->create($this->category);

        $updated_success = $category->update([
            'status' => true
        ]);

        $this->assertTrue($updated_success);
        $this->assertEquals($this->category['name'], $category->name);
        $this->assertEquals($this->category['slug'], $category->slug);
        $this->assertTrue($category->status);

        $this->assertDatabaseHas('categories', [
            'name' => $category->name,
            'status' => $category->status
        ]);
    }

    public function test_destroy_category_success()
    {
        $category = $this->category_model->create($this->category);

        $deleted_success = $category->delete();

        $this->assertTrue($deleted_success);
        $this->assertDatabaseMissing('categories', [
            'name' => $this->category['name']
        ]);
    }
}
