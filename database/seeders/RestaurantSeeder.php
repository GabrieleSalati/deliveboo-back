<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = [
            [
                'user_id' => '1',
                'p_iva' => '12345678902',
                'name' => 'Ristorante da Mario',
                'address' => 'Via Roma, 1, Milano',
                'picture' => 'https://media-assets.lacucinaitaliana.it/photos/61fac9aebe6f37f54cf8d0de/16:9/w_2560%2Cc_limit/pizzeria-popolare.jpg',
            ],
            [
                'user_id' => '2',
                'p_iva' => '12345678910',
                'name' => 'Ristorante il Piacere',
                'address' => 'Via Dante, 3, Milano',
                'picture' => 'https://www.tavernaoreste.it/wp-content/uploads/2022/03/Taverna-da-Oreste-Lazise-4-_f494d1.jpg',
            ],
            [
                'user_id' => '3',
                'p_iva' => '23456789101',
                'name' => 'Ristorante Orientale',
                'address' => 'Via Garibaldi, 4, Milano',
                'picture' => 'https://www.hongkongcucciago.it/assets/img-temp/about/ristorante_cinese1.jpg',
            ],
            [
                'user_id' => '4',
                'p_iva' => '34567891012',
                'name' => 'Ristorante Buddha',
                'address' => 'Via Navigli, 5, Milano',
                'picture' => 'https://th.bing.com/th/id/OIP.bj_egMNRUCooAc7tnGAwvQHaE7?pid=ImgDet&rs=1',
            ],
            [
                'user_id' => '5',
                'p_iva' => '45678910123',
                'name' => 'Mythos',
                'address' => 'Via Bergamo, 7, Milano',
                'picture' => 'https://img.italiaonline.it/0WO5p000002tAbHGAU_Mythosesterno.jpg',
            ],
            [
                'user_id' => '6',
                'p_iva' => '56789101234',
                'name' => 'Ristorante il Rifugio',
                'address' => 'Via Dante Alighieri, 8, Milano',
                'picture' => 'https://www.orso80.it/images/slides/ristorante-l-orso-80-esterno.jpg',
            ],
            [
                'user_id' => '7',
                'p_iva' => '67891012345',
                'name' => 'Ristorante il Nido',
                'address' => 'Via Alessandro Volta, 9, Milano',
                'picture' => 'https://www.finedininglovers.it/sites/g/files/xknfdk1106/files/2021-04/Dehors-Milano-novita.jpg',
            ],
            [
                'user_id' => '8',
                'p_iva' => '78901234567',
                'name' => 'Pizzeria Margherita',
                'address' => 'Via Torino, 12, Milano',
                'picture' => 'https://www.ristorantelaguardia.it/wp-content/uploads/2019/06/mg-1831.jpg',
            ],
            [
                'user_id' => '9',
                'p_iva' => '89012345678',
                'name' => 'Ristorante Tokyo',
                'address' => 'Via Paolo Sarpi, 11, Milano',
                'picture' => 'https://www.scattidigusto.it/wp-content/uploads/2018/01/Kowa-nuovo-ristorante-giapponese-cinese-Milano.jpg',
            ],
            [
                'user_id' => '10',
                'p_iva' => '90123456789',
                'name' => 'Ristorante da Alberto',
                'address' => 'Via Giotto, 15, Milano',
                'picture' => 'https://www.zodiacorimini.it/wp-content/uploads/2014/07/interno-ristorante-zodiaco.jpg',
            ],
        ];

        foreach ($restaurants as $restaurant) {
            Restaurant::create([
                'user_id' => $restaurant['user_id'],
                'p_iva' => $restaurant['p_iva'],
                'name' => $restaurant['name'],
                'address' => $restaurant['address'],
                'picture' => $restaurant['picture'],
            ]);
        }
    }
}
