<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Order;
use App\Models\Dish;

class DishOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $orders = Order::all()->pluck('id');
        // $dishes = Dish::all();

        //     foreach ($dishes as $dish) { 
        //         $dish->orders()->attach($faker->randomElements($orders, random_int(0, 3)));

        //         foreach ($dish->orders() as $order){
        //             $order->quantity()->attach(rand(1, 5));
        //         }
                
        //     }
        
        // TODO ciclare anche per ordine
        $order = Order::find(1);
        $dishes = Dish::where('restaurant_id',1)->pluck('id');

        foreach ($dishes as $dish) {
            $dishid = Dish::find($dish);
            $order->dishes()->attach($dishid->id, ['quantity' => rand(1, 10)]);
        }

        // $order->dishes()->attach($dish->id, ['quantity' => rand(1, 10)]);
    }
}