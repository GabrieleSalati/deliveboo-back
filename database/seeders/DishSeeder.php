<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dishes = [
            [
                'restaurant_id' => 1,
                'name' => 'Pizza Margherita',
                'description' => 'Una pizza classica italiana con mozzarella fresca, pomodoro e basilico.',
                'price' => 10,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 8,
                'name' => 'Pizza Margherita',
                'description' => 'Una pizza classica italiana con mozzarella fresca, pomodoro e basilico.',
                'price' => 10,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 2,
                'name' => 'Pizza Margherita',
                'description' => 'Una pizza classica italiana con mozzarella fresca, pomodoro e basilico.',
                'price' => 10,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 2,
                'name' => 'Spaghetti alla Carbonara',
                'description' => 'Una pasta italiana cremosa e saporita con guanciale, uova, pecorino e pepe nero.',
                'price' => 12,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 7,
                'name' => 'Spaghetti alla Carbonara',
                'description' => 'Una pasta italiana cremosa e saporita con guanciale, uova, pecorino e pepe nero.',
                'price' => 12,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 10,
                'name' => 'Spaghetti alla Carbonara',
                'description' => 'Una pasta italiana cremosa e saporita con guanciale, uova, pecorino e pepe nero.',
                'price' => 12,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 7,
                'name' => 'Bistecca alla fiorentina',
                'description' => ' Una bistecca di manzo alla griglia tradizionale della cucina toscana, servita con patate e verdure.',
                'price' => 25,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 6,
                'name' => 'Bistecca alla fiorentina',
                'description' => ' Una bistecca di manzo alla griglia tradizionale della cucina toscana, servita con patate e verdure.',
                'price' => 25,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 9,
                'name' => 'Dim Sum misti',
                'description' => 'Una selezione di bocconcini cinesi ripieni di carne o verdure, cotti al vapore o fritti.',
                'price' => 12,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 3,
                'name' => 'Dim Sum misti',
                'description' => 'Una selezione di bocconcini cinesi ripieni di carne o verdure, cotti al vapore o fritti.',
                'price' => 12,
                'picture' => '',
                'visible' => 1,
            ],


            [
                'restaurant_id' => 5,
                'name' => 'Gyros pita',
                'description' => 'Un piatto greco di carne di maiale o pollo arrostita, servita all\'interno di una pita con pomodori, cipolle e tzatziki.',
                'price' => 8,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 9,
                'name' => 'Sushi misto',
                'description' => 'Una selezione di sushi giapponese a base di riso e pesce crudo, come tonno, salmone e gamberi.',
                'price' => 18.50,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 10,
                'name' => 'Ravioli di zucca',
                'description' => 'Un piatto di pasta italiano ripiena di zucca, servito con burro, salvia e parmigiano.',
                'price' => 12,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 6,
                'name' => 'Ravioli di zucca',
                'description' => 'Un piatto di pasta italiano ripiena di zucca, servito con burro, salvia e parmigiano.',
                'price' => 12,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 4,
                'name' => 'Pekin Duck ',
                'description' => 'Un piatto cinese di anatra arrosto, servito con pancake, cipollotto e salsa hoisin.',
                'price' => 23,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 3,
                'name' => 'Pekin Duck ',
                'description' => 'Un piatto cinese di anatra arrosto, servito con pancake, cipollotto e salsa hoisin.',
                'price' => 23,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 5,
                'name' => 'Moussaka',
                'description' => 'Un piatto greco a base di melanzane, carne macinata, patate e salsa di pomodoro, ricoperto di besciamella e formaggio grattugiato.',
                'price' => 13,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 9,
                'name' => 'Tonkotsu ramen',
                'description' => 'Un brodo di maiale giapponese arricchito con ramen, uova, carne di maiale, germogli di soia e cipollotto.',
                'price' => 12,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 3,
                'name' => 'Tonkotsu ramen',
                'description' => 'Un brodo di maiale giapponese arricchito con ramen, uova, carne di maiale, germogli di soia e cipollotto.',
                'price' => 12,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 8,
                'name' => 'Pizza Quattro Formaggi',
                'description' => 'Pizza con quattro tipi di formaggio diversi: gorgonzola, provolone, mozzarella e parmigiano',
                'price' => 12,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 1,
                'name' => 'Pizza Quattro Formaggi',
                'description' => 'Pizza con quattro tipi di formaggio diversi: gorgonzola, provolone, mozzarella e parmigiano',
                'price' => 12,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 8,
                'name' => 'Pizza Alla Diavola',
                'description' => 'Pizza con pomodoro, mozzarella e fette di salame piccante.',
                'price' => 14,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 1,
                'name' => 'Pizza Alla Diavola',
                'description' => 'Pizza con pomodoro, mozzarella e fette di salame piccante.',
                'price' => 14,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 10,
                'name' => 'Hamburger Deluxe',
                'description' => 'Doppio Hamburger con fette di bacon croccante e cipolle caramellate.',
                'price' => 12.50,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 6,
                'name' => 'Hamburger Deluxe',
                'description' => 'Doppio Hamburger con fette di bacon croccante e cipolle caramellate.',
                'price' => 12.50,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 10,
                'name' => 'Cheeseburger',
                'description' => 'Un hamburger con formaggio fuso, ketchup, senape e cetriolini sottaceto',
                'price' => 10,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 6,
                'name' => 'Cheeseburger',
                'description' => 'Un hamburger con formaggio fuso, ketchup, senape e cetriolini sottaceto',
                'price' => 10,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 10,
                'name' => 'Hamburger Veg',
                'description' => 'Patty a base di verdure e proteine vegetali, servito con avocado e hummus.',
                'price' => 16.90,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 6,
                'name' => 'Hamburger Veg',
                'description' => 'Patty a base di verdure e proteine vegetali, servito con avocado e hummus.',
                'price' => 16.90,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 2,
                'name' => 'Lasagne alla Bolognese',
                'description' => 'Strati di pasta fresca all\'uovo alternati con un sugo di carne di manzo, salsa di pomodoro, formaggio e besciamella.',
                'price' => 9,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 6,
                'name' => 'Lasagne alla Bolognese',
                'description' => 'Strati di pasta fresca all\'uovo alternati con un sugo di carne di manzo, salsa di pomodoro, formaggio e besciamella.',
                'price' => 9,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 2,
                'name' => 'Tagliatelle al ragù',
                'description' => 'Tagliatelle fresche servita con Ragù Bolognese',
                'price' => 7,
                'picture' => '',
                'visible' => 1,
            ],

            [
                'restaurant_id' => 6,
                'name' => 'Tagliatelle al ragù',
                'description' => 'Tagliatelle fresche servita con Ragù Bolognese',
                'price' => 7,
                'picture' => '',
                'visible' => 1,
            ],


        ];

        foreach ($dishes as $dish) {
            Restaurant::create([
                'restaurant_id' => $dish['restaurant_id'],
                'name' => $dish['name'],
                'description' => $dish['description'],
                'price' => $dish['price'],
                'picture' => $dish['picture'],
                'visible' => $dish['visible']
            ]);
        }
    }
}
