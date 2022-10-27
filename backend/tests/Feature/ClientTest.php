<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Client;
use Database\Seeders\ClientSeeder;

class ClientTest extends TestCase
{
    use RefreshDatabase;

    public function testListClientForEmptyDb()
    {
        $response = $this->getJson('/api/clients');

        $response->assertStatus(200);
        $this->assertEquals(0, count($response->json()));
    }

    public function testShowClientForEmptyDb()
    {
        $response = $this->getJson('/api/clients/1');

        $response->assertStatus(404);
    }

    public function testListClient()
    {
        $this->seed(ClientSeeder::class);

        $response = $this->getJson('/api/clients');

        $response->assertStatus(200);
    }

    public function testShowClient()
    {
        $this->seed(ClientSeeder::class);

        $client = Client::where('tin', 'V-1100556')->first();

        $url = '/api/clients/'.$client->id;

        $response = $this->getJson($url);

        $response->assertStatus(200);

        $response = $response->decodeResponseJson();

        $this->assertEquals($response['name'], $client->name);
        $this->assertEquals($response['tin'], $client->tin);
        $this->assertEquals($response['phone_number'], $client->phone_number);
        $this->assertEquals($response['email'], $client->email);
    }

}
