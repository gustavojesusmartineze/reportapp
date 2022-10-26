<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'name' => "Inogesd",
            'tin' => 'A-81845091',
            'phone_number' => '607340197',
            'email' => 'inogesd@gmail.com'
        ]);

        Client::create([
            'name' => "Castel Corp",
            'tin' => 'A-21845093',
            'phone_number' => '607340137',
            'email' => 'castelcorp@gmail.com'
        ]);

        Client::create([
            'name' => "Madrid LLC",
            'tin' => 'A-41865092',
            'phone_number' => '107340137',
            'email' => 'madridllc@gmail.com'
        ]);

        Client::create([
            'name' => "Wayra LLC",
            'tin' => 'A-23745081',
            'phone_number' => '103340312',
            'email' => 'wayrallc@gmail.com'
        ]);

        Client::create([
            'name' => "Gustavo Martinez",
            'tin' => 'V-1900556',
            'phone_number' => '513340312',
            'email' => 'gustavomartinez@gmail.com'
        ]);

        Client::create([
            'name' => "Andrea Ferrari",
            'tin' => 'V-1100556',
            'phone_number' => '113340312',
            'email' => 'andreaferrari@gmail.com'
        ]);

        Client::create([
            'name' => "Arianna Pitino",
            'tin' => 'V-1300556',
            'phone_number' => '133340312',
            'email' => 'ariannapitino@gmail.com'
        ]);
    }
}
