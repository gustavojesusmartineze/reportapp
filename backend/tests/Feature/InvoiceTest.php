<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Invoice;
use Database\Seeders\InvoiceForTestSeeder;

class InvoiceTest extends TestCase
{
    use RefreshDatabase;

    public function testListInvoiceForEmptyDb()
    {
        $response = $this->getJson('/api/invoices');

        $response->assertStatus(200);
        $this->assertEquals(0, count($response->json()));
    }

    public function testShowInvoiceForEmptyDb()
    {
        $response = $this->getJson('/api/invoices/1');

        $response->assertStatus(404);
    }

    public function testListInvoice()
    {
        $this->seed(InvoiceForTestSeeder::class);

        $response = $this->getJson('/api/invoices');

        $response->assertStatus(200);
    }

    public function testShowInvoice()
    {
        $this->seed(InvoiceForTestSeeder::class);

        $invoice = Invoice::first();


        $url = '/api/invoices/'.$invoice->id;

        $response = $this->getJson($url);

        $response->assertStatus(200);

        $response = $response->decodeResponseJson();

        $this->assertEquals($response['total'], $invoice->total);
    }

}
