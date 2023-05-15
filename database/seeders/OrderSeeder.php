<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;


class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(FakerFactory $faker)
    {
        $faker = FakerFactory::create('it_IT');

        for ($i = 0; $i < 10; $i++) {
            // calcola il totale del conto, includendo la spedizione di 3 euro
            $total_bill = $faker->randomFloat(2, 14, 150);

            // calcola il totale del conto senza la spedizione
            $bill_no_shipping = $total_bill - random_int(3, 7);

            // genera il nome del cliente
            $guest_name = $faker->name();

            // genera il nome del cliente
            $guest_email = $faker->email();

            // genera un indirizzo casuale a Milano
            $address = $faker->streetAddress() . ", Milano";

            // genera un numero di cellulare italiano
            $telephone = $faker->phoneNumber();

            // crea il nuovo ordine
            $order = new Order();
            $order->total_bill = $total_bill;
            $order->bill_no_shipping = $bill_no_shipping;
            $order->guest_name = $guest_name;
            $order->email = $guest_email;
            $order->address = $address;
            $order->telephone = $telephone;
            $order->status = 1;
            $order->save();
        }
    }
}
