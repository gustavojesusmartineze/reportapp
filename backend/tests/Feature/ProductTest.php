<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;
use Database\Seeders\ProductSeeder;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function testListProductForEmptyDb()
    {
        $response = $this->getJson('/api/products');

        $response->assertStatus(200);
        $this->assertEquals(0, count($response->json()));
    }

    public function testShowProductForEmptyDb()
    {
        $response = $this->getJson('/api/products/1');

        $response->assertStatus(404);
    }

    public function testListProduct()
    {
        $this->seed(ProductSeeder::class);

        $response = $this->getJson('/api/products');

        $response->assertStatus(200);
    }

    public function testShowProduct()
    {
        $this->seed(ProductSeeder::class);

        $product = Product::where('sku', 'GAR-RV0000-890')->first();

        $url = '/api/products/'.$product->id;

        $response = $this->getJson($url);

        $response->assertStatus(200);

        $response = $response->decodeResponseJson();

        $this->assertEquals($response['name'], $product->name);
        $this->assertEquals($response['description'], $product->description);
        $this->assertEquals($response['sku'], $product->sku);
        $this->assertEquals($response['price'], $product->price);
    }

}
