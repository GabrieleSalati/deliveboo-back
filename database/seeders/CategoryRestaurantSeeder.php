<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class CategoryRestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { {
            $categories = Category::all()->pluck('id');
            $restaurants = Restaurant::all();

            $restaurants[0]->categories()->attach([0, 8]);
            $restaurants[1]->categories()->attach([0, 8]);
            $restaurants[2]->categories()->attach([2, 7]);
            $restaurants[3]->categories()->attach([3, 7]);
            $restaurants[4]->categories()->attach([9, 7]);
            $restaurants[5]->categories()->attach([7, 0, 5]);
            $restaurants[6]->categories()->attach([0, 7, 6]);
            $restaurants[7]->categories()->attach([8]);
            $restaurants[8]->categories()->attach([6, 1]);
            $restaurants[9]->categories()->attach([0, 7, 6]);
        }
    }
}
