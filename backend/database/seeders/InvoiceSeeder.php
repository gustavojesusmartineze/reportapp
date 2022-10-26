<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\InvoiceStatus;
use App\Models\InvoiceProduct;

use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client1 = Client::find(1);
        $client2 = Client::find(2);
        $client3 = Client::find(3);
        $client4 = Client::find(4);
        $client5 = Client::find(5);
        $product1 = Product::find(1);
        $product2 = Product::find(2);
        $product3 = Product::find(3);
        $product4 = Product::find(4);
        $product5 = Product::find(5);
        $product5 = Product::find(6);

        $totalInvoice1 = $product1->price + $product2->price;
        $invoice = Invoice::create([
            'status' => InvoiceStatus::ONHOLD,
            'total' => $totalInvoice1,
            'client_id' => $client1->id
        ]);

        InvoiceProduct::create([
            'invoice_id' => $invoice->id,
            'product_id' => $product1->id,
            'quantity' => 1
        ]);

        InvoiceProduct::create([
            'invoice_id' => $invoice->id,
            'product_id' => $product2->id,
            'quantity' => 1
        ]);

        $totalInvoice2 = $product1->price + ($product2->price * 2) + ($product3->price * 2);
        $invoice2 = Invoice::create([
            'status' => InvoiceStatus::PENDING_PAYMENT,
            'total' => $totalInvoice2,
            'client_id' => $client2->id
        ]);

        InvoiceProduct::create([
            'invoice_id' => $invoice2->id,
            'product_id' => $product1->id,
            'quantity' => 1
        ]);

        InvoiceProduct::create([
            'invoice_id' => $invoice2->id,
            'product_id' => $product2->id,
            'quantity' => 2
        ]);

        InvoiceProduct::create([
            'invoice_id' => $invoice2->id,
            'product_id' => $product3->id,
            'quantity' => 2
        ]);

        $totalInvoice3 = ($product1->price * 3) + ($product2->price * 2) + ($product3->price * 2);
        $invoice3 = Invoice::create([
            'status' => InvoiceStatus::PAYMENT_VERIFICATION,
            'total' => $totalInvoice3,
            'client_id' => $client3->id
        ]);

        InvoiceProduct::create([
            'invoice_id' => $invoice3->id,
            'product_id' => $product1->id,
            'quantity' => 3
        ]);

        InvoiceProduct::create([
            'invoice_id' => $invoice3->id,
            'product_id' => $product2->id,
            'quantity' => 2
        ]);

        InvoiceProduct::create([
            'invoice_id' => $invoice3->id,
            'product_id' => $product3->id,
            'quantity' => 2
        ]);

        $totalInvoice4 = ($product1->price * 1) + ($product4->price * 2);
        $invoice4 = Invoice::create([
            'status' => InvoiceStatus::PAYMENT_APPROVED,
            'total' => $totalInvoice4,
            'client_id' => $client4->id
        ]);

        InvoiceProduct::create([
            'invoice_id' => $invoice4->id,
            'product_id' => $product1->id,
            'quantity' => 1
        ]);

        InvoiceProduct::create([
            'invoice_id' => $invoice4->id,
            'product_id' => $product4->id,
            'quantity' => 2
        ]);

        $totalInvoice5 = ($product4->price * 2) + ($product5->price * 3);
        $invoice5 = Invoice::create([
            'status' => InvoiceStatus::PAYMENT_APPROVED,
            'total' => $totalInvoice5,
            'client_id' => $client5->id
        ]);

        InvoiceProduct::create([
            'invoice_id' => $invoice5->id,
            'product_id' => $product4->id,
            'quantity' => 2
        ]);

        InvoiceProduct::create([
            'invoice_id' => $invoice5->id,
            'product_id' => $product5->id,
            'quantity' => 3
        ]);
    }
}
