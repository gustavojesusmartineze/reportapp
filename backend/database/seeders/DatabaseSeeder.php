<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // If you want to use factory for seeder should uncomment next line
        // \App\Models\Client::factory(10)->create();
        // \App\Models\Product::factory(10)->create();

        $this->call(ClientSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(InvoiceSeeder::class);
    }
}
