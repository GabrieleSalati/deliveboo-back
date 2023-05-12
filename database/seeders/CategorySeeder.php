<?php
namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'label' => 'Italiano',
                'picture' => 'https://images.pexels.com/photos/3606799/pexels-photo-3606799.jpeg?auto=compress&cs=tinysrgb&w=800',
                'color' => '#FF5733'
            ],
            [
                'label' => 'Giapponese',
                'picture' => ' https://images.pexels.com/photos/2323398/pexels-photo-2323398.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
                'color' => '#5BFF33'
            ],
            [
                'label' => 'Cinese',
                'picture' => 'https://images.pexels.com/photos/2089712/pexels-photo-2089712.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
                'color' => '#33C7FF'
            ],
            [
                'label' => 'Indiano',
                'picture' => 'https://images.pexels.com/photos/11325184/pexels-photo-11325184.jpeg?auto=compress&cs=tinysrgb&w=800',
                'color' => '#C733FF'
            ],
            [
                'label' => 'Messicano',
                'picture' => 'https://images.pexels.com/photos/2955819/pexels-photo-2955819.jpeg?auto=compress&cs=tinysrgb&w=800',
                'color' => '#FF33E5'
            ],
            [
                'label' => 'Hamburger',
                'picture' => 'https://images.pexels.com/photos/3616956/pexels-photo-3616956.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
                'color' => '#FFE933'
            ],
            [
                'label' => 'Pesce',
                'picture' => ' https://images.pexels.com/photos/262959/pexels-photo-262959.jpeg?auto=compress&cs=tinysrgb&w=800',
                'color' => '#33FFB2'
            ],
            [
                'label' => 'Carne',
                'picture' => 'https://images.pexels.com/photos/3535383/pexels-photo-3535383.jpeg?auto=compress&cs=tinysrgb&w=800',
                'color' => '#FFA033'
            ],
            [
                'label' => 'Pizza',
                'picture' => 'https://images.pexels.com/photos/4773769/pexels-photo-4773769.jpeg?auto=compress&cs=tinysrgb&h=627&fit=crop&w=1200',
                'color' => '#3399FF'
            ],
            [
                'label' => 'Greco',
                'picture' => 'https://images.pexels.com/photos/1211887/pexels-photo-1211887.jpeg?auto=compress&cs=tinysrgb&w=800',
                'color' => '#FF3399'
            ]
        ];

        foreach ($categories as $category) {
            Category::create([
                'label' => $category['label'],
                'picture' => $category['picture'],
                'color' => $category['color']
            ]);
        }
    }
} 