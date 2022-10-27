<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Reservation;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $reservations = new Reservation();
        $reservations->date = date('2022-10-27');
        $reservations->price = 1895;
        $reservations->client_id = 1;
        $reservations->save();

        $reservations = new Reservation();
        $reservations->date = date('2022-10-30');
        $reservations->price = 1899;
        $reservations->client_id = 1;
        $reservations->save();

        $reservations = new Reservation();
        $reservations->date = date('2022-11-17');
        $reservations->price = 2012;
        $reservations->client_id = 2;
        $reservations->save();


    }
}
