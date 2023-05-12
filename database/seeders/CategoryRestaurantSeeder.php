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

            $restaurants[0]->categories()->attach([1, 9]);
            $restaurants[1]->categories()->attach([1, 9]);
            $restaurants[2]->categories()->attach([3, 8]);
            $restaurants[3]->categories()->attach([4, 8]);
            $restaurants[4]->categories()->attach([10, 8]);
            $restaurants[5]->categories()->attach([8, 1, 6]);
            $restaurants[6]->categories()->attach([1, 8, 7]);
            $restaurants[7]->categories()->attach([9]);
            $restaurants[8]->categories()->attach([7, 2]);
            $restaurants[9]->categories()->attach([1, 8, 7]);
        }
    }
}