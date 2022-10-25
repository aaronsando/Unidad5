<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $client = new Client();
        $client->name = 'aaron';
        $client->phone_number = '62361232';
        $client->email = 'aaron@example.com';
        $client->save();

        $client = new Client();
        $client->name = 'daniel';
        $client->phone_number = '696969';
        $client->email = 'lokitop@example.com';
        $client->save();

        $client = new Client();
        $client->name = 'dieguito';
        $client->phone_number = '10101010';
        $client->email = 'moxxitop@example.com';
        $client->save();

        
    }
}
