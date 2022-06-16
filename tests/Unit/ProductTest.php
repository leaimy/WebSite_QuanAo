<?php

namespace Tests\Unit;

use App\Category;
use App\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Faker\Factory as Faker;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->faker = Faker::create();

        $category = app()->make(Category::class)->create([
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'status' => true
        ]);

        $this->product = [
            'sku' => $this->faker->md5,
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'description' => $this->faker->paragraph,
            'category_id' => $category->id,
            'unit_price' => $this->faker->randomDigit,
            'sale_price' => $this->faker->randomDigit,
            'preview_image_name' => 'image.jpg',
            'preview_image_path' => 'image.jpg',
            'views' => $this->faker->randomDigit,
            'available_stock' => $this->faker->randomDigit
        ];

        $this->product_model = app()->make(Product::class);
    }

    public function test_create_new_product_success()
    {
        $new_product = $this->product_model->create($this->product);

        $this->assertInstanceOf(Product::class, $new_product);
        $this->assertEquals($this->product['sku'], $new_product->sku);
        $this->assertEquals($this->product['name'], $new_product->name);
        $this->assertEquals($this->product['slug'], $new_product->slug);
        $this->assertEquals($this->product['description'], $new_product->description);
        $this->assertEquals($this->product['category_id'], $new_product->category_id);
        $this->assertEquals($this->product['unit_price'], $new_product->unit_price);
        $this->assertEquals($this->product['sale_price'], $new_product->sale_price);
        $this->assertEquals($this->product['preview_image_name'], $new_product->preview_image_name);
        $this->assertEquals($this->product['preview_image_path'], $new_product->preview_image_path);
        $this->assertEquals($this->product['views'], $new_product->views);
        $this->assertEquals($this->product['available_stock'], $new_product->available_stock);

        $this->assertDatabaseHas('products', [
            'sku' => $new_product->sku
        ]);
    }

    public function test_find_product_success()
    {
        $product = $this->product_model->create($this->product);

        $found = $this->product_model->findOrFail($product->id);

        $this->assertInstanceOf(Product::class, $product);
        $this->assertEquals($this->product['sku'], $product->sku);
        $this->assertEquals($this->product['name'], $product->name);
        $this->assertEquals($this->product['slug'], $product->slug);
        $this->assertEquals($this->product['description'], $product->description);
        $this->assertEquals($this->product['category_id'], $product->category_id);
        $this->assertEquals($this->product['unit_price'], $product->unit_price);
        $this->assertEquals($this->product['sale_price'], $product->sale_price);
        $this->assertEquals($this->product['preview_image_name'], $product->preview_image_name);
        $this->assertEquals($this->product['preview_image_path'], $product->preview_image_path);
        $this->assertEquals($this->product['views'], $product->views);
        $this->assertEquals($this->product['available_stock'], $product->available_stock);

        $this->assertDatabaseHas('products', [
            'sku' => $product->sku
        ]);
    }

    public function test_update_product_success()
    {
        $product = $this->product_model->create($this->product);

        $updated_success = $product->update([
            'name' => 'updated product name'
        ]);

        $this->assertTrue($updated_success);
        $this->assertEquals('updated product name', $product->name);

        $this->assertDatabaseHas('products', [
            'sku' => $product->sku,
            'name' => $product->name
        ]);
    }

    public function test_destroy_product_success()
    {
        $product = $this->product_model->create($this->product);

        $deleted_success = $product->delete();

        $this->assertTrue($deleted_success);
        $this->assertDatabaseMissing('products', [
            'sku' => $product->sku
        ]);
    }
}
