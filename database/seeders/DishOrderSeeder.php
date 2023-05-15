<?php

namespace Database\Seeders;
use Illuminate\Support\Arr;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Order;
use App\Models\Dish;
use App\Models\Restaurant;

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
        
        
        // $order = Order::find(1);
        
        // recupera tutti gli ordini
        $orders = Order::all();
        
        // recupera tutti gli id dei ristoranti e li inserisce nell' array $allRestaurantIds
        $allRestaurantIds = Restaurant::all()->pluck('id')->toArray();

        
        
        // cicla per ogni ordine 
        foreach($orders as $order) {

          // seleziona un numero randomico tra 1 e il numero massimo di valori contenuti nell' array $allRestaurantIds
          $randRestaurantId = rand(1, count($allRestaurantIds));
          
          // recupera tutti gli id dei piatti il cui 'restaurant_id' è uguale al valore scelto in $randRestaurantId e li inserisce nell' array $dishIds
          $dishIds = Dish::where('restaurant_id',$randRestaurantId)->pluck('id')->toArray();

          // prende un numero random di piatti compreso tra 1 e il numero massimo di piatti contenuti nell' array $dishIds
          $numberOfDishes = rand(1, count($dishIds));
          
          // array_rand prende il numero di valori contenuto in $numberOfDishes scegliendoli randomicamente da $dishIds e li inserisce nell' array $randomDishIds
          $randomDishIds = array_rand($dishIds, $numberOfDishes);
          
          // se array_rand trova 1 solo elemento non lo inserisce in un array quindi per poter ciclare correttamente anche in caso di 1 solo piatto selezionato bisogna ricorrere ad 
          //  Arr::wrap() che trasforma qualsiasi dato in un array
          $randomDishIds = Arr::wrap($randomDishIds);

          // cicla per ogni id contenuto nell' array $randomDishIds
          foreach ($randomDishIds as $randomDishId) {


            //! per ogni valore contenuto nell' array $randomDishIds cerca il piatto sul database il cui id è uguale a $randomDishId
            $dish = Dish::find($dishIds[$randomDishId]);
            
            // per ogni ordine ciclato nel primo for si aggiunge: il piatto che stiamo ciclando nel secondo for e una quantity random tra 1 e 5          
            $order->dishes()->attach($dish->id, ['quantity' => rand(1, 5)]);
          }
        }

        // $order->dishes()->attach($dish->id, ['quantity' => rand(1, 10)]);
    }
}