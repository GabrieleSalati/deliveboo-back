<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $labels = ['Italiano', 'Giapponese', 'Cinese', 'Indiano', 'Messicano', 'Hamburger', 'Pesce', 'Carne', 'Pizza', 'Greco'];

        foreach ($labels as $label) {
            $category = new Category();
            $category->label = $label;
            $category->picture = asset('images/categories/' . $label . '.jpg');
            $category->color = $faker->hexColor();

            $category->save();
        }
    }
}
