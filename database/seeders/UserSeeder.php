<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = [
            [
                'name' => 'Marco Rossi',
                'email' => 'ristorante1@example.com',
                'password' => 'password1',
            ],
            [
                'name' => 'Sara Bianchi',
                'email' => 'ristorante2@example.com',
                'password' => 'password2',
            ],
            [
                'name' => 'Matteo Esposito',
                'email' => 'ristorante3@example.com',
                'password' => 'password3',
            ],
            [
                'name' => 'Martina Neri',
                'email' => 'ristorante4@example.com',
                'password' => 'password4',
            ],
            [
                'name' => 'Giovanni Rizzo',
                'email' => 'ristorante5@example.com',
                'password' => 'password5',
            ],
            [
                'name' => 'Giulia Ricci',
                'email' => 'ristorante6@example.com',
                'password' => 'password6',
            ],
            [
                'name' => 'Luca Moretti',
                'email' => 'ristorante7@example.com',
                'password' => 'password7',
            ],
            [
                'name' => 'Elena Barbieri',
                'email' => 'ristorante8@example.com',
                'password' => 'password8',
            ],
            [
                'name' => 'Andrea Fabbri',
                'email' => 'ristorante9@example.com',
                'password' => 'password9',
            ],
            [
                'name' => 'Federica Vitale',
                'email' => 'ristorante10@example.com',
                'password' => 'password10',
            ],
            
        ];

        foreach($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
            ]); 
        }
    }
}