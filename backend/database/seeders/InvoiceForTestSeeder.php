<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\InvoiceStatus;
use App\Models\InvoiceProduct;

use Illuminate\Database\Seeder;

class InvoiceForTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client1 = Client::create([
            'name' => "Inogesd",
            'tin' => 'A-81845091',
            'phone_number' => '607340197',
            'email' => 'inogesd@gmail.com'
        ]);

        $client2 = Client::create([
            'name' => "Castel Corp",
            'tin' => 'A-21845093',
            'phone_number' => '607340137',
            'email' => 'castelcorp@gmail.com'
        ]);

        $client3 = Client::create([
            'name' => "Madrid LLC",
            'tin' => 'A-41865092',
            'phone_number' => '107340137',
            'email' => 'madridllc@gmail.com'
        ]);

        $client4 = Client::create([
            'name' => "Wayra LLC",
            'tin' => 'A-23745081',
            'phone_number' => '103340312',
            'email' => 'wayrallc@gmail.com'
        ]);

        $client5 = Client::create([
            'name' => "Gustavo Martinez",
            'tin' => 'V-1900556',
            'phone_number' => '513340312',
            'email' => 'gustavomartinez@gmail.com'
        ]);

        $product1 = Product::create([
            'name' => "Garmin Drive 52",
            'description' => "Easy-to-use GPS navigator includes detailed map updates of the U.S. and Canada.",
            'sku' => 'GAR-D00001-L52',
            'price' => 135.5
        ]);

        $product2 = Product::create([
            'name' => "TomTom GO Discover 7",
            'description' => "Trusted TomTom traffic and speed camera alerts: Stay relaxed and in control with time- and fuel- saving traffic congestion avoidance, reliable arrival times and 1 year speed cam alerts.",
            'sku' => 'TOM-GO0001-L07',
            'price' => 300
        ]);

        $product3 = Product::create([
            'name' => "Garmin DriveSmart 66",
            'description' => "Across its product line, Garmin provides the best visual and audible directions, as well as many handy navigational extras.",
            'sku' => 'GAR-DS0000-L66',
            'price' => 239.5
        ]);

        $product4 = Product::create([
            'name' => "Garmin RV 890",
            'description' => "Preloaded directory of RV parks and services, TripAdvisor traveler ratings, content from Ultimate Public Campgrounds, KOA , iOverlander , U. S. national parks, PlanRV and Foursquare.",
            'sku' => 'GAR-RV0000-890',
            'price' => 449
        ]);

        $product5 = Product::create([
            'name' => "Garmin RV 1090 ",
            'description' => "Let the RV 1090 navigate your journey so you can enjoy the memories you make along the way.",
            'sku' => 'GAR-RV0001-090',
            'price' => 679
        ]);

        $product6 = Product::create([
            'name' => "Garmin Tread Powersport",
            'description' => "Stay connected to your friends with the Group Ride Radio featuring push-to-talk fist mic and group tracking for up to 20 riders using a Tread navigator.",
            'sku' => 'GAR-TPS000-P01',
            'price' => 200
        ]);

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
