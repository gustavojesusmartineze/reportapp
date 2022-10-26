<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => "Garmin Drive 52",
            'description' => "Easy-to-use GPS navigator includes detailed map updates of the U.S. and Canada.",
            'sku' => 'GAR-D00001-L52',
            'price' => 135.5
        ]);

        Product::create([
            'name' => "TomTom GO Discover 7",
            'description' => "Trusted TomTom traffic and speed camera alerts: Stay relaxed and in control with time- and fuel- saving traffic congestion avoidance, reliable arrival times and 1 year speed cam alerts.",
            'sku' => 'TOM-GO0001-L07',
            'price' => 300
        ]);

        Product::create([
            'name' => "Garmin DriveSmart 66",
            'description' => "Across its product line, Garmin provides the best visual and audible directions, as well as many handy navigational extras.",
            'sku' => 'GAR-DS0000-L66',
            'price' => 239.5
        ]);

        Product::create([
            'name' => "Garmin RV 890",
            'description' => "Preloaded directory of RV parks and services, TripAdvisor traveler ratings, content from Ultimate Public Campgrounds, KOA , iOverlander , U. S. national parks, PlanRV and Foursquare.",
            'sku' => 'GAR-RV0000-890',
            'price' => 449
        ]);

        Product::create([
            'name' => "Garmin RV 1090 ",
            'description' => "Let the RV 1090 navigate your journey so you can enjoy the memories you make along the way.",
            'sku' => 'GAR-RV0001-090',
            'price' => 679
        ]);


        Product::create([
            'name' => "Garmin Tread Powersport",
            'description' => "Stay connected to your friends with the Group Ride Radio featuring push-to-talk fist mic and group tracking for up to 20 riders using a Tread navigator.",
            'sku' => 'GAR-TPS000-P01',
            'price' => 200
        ]);

        Product::create([
            'name' => "TomTom GO Supreme 5",
            'description' => "TomTom MyDrive and Road Trips: Pre-plan your journey and design your next adventure with TomTom Road Trips.",
            'sku' => 'TOM-GOS000-L05',
            'price' => 200
        ]);

        Product::create([
            'name' => "TomTom GO Discover 7",
            'description' => "Trusted TomTom traffic and speed camera alerts: Stay relaxed and in control with time- and fuel- saving traffic congestion avoidance, reliable arrival times and 1 year speed cam alerts.",
            'sku' => 'TOM-GO0001-L07',
            'price' => 300
        ]);
    }
}
