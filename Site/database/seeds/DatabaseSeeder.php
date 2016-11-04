<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //users seeding
        DB::table('users')->insert([
            'voornaam' => 'lander',
            'achternaam' => 'verschueren',
            'password' => bcrypt('lander'),
            'email' => 'landerverschueren@gmail.com',
            'adres' => 'warandestraat 26',
            'woonplaats' => 'wilrijk',
            'postcode' => '2222',
            'admin' => false,
        ]);
        DB::table('users')->insert([
            'voornaam' => 'thomas',
            'achternaam' => 'van roy',
            'password' => bcrypt('thomas'),
            'email' => 'thomasvanroy08@gmail.com',
            'adres' => 'rode dries 28',
            'woonplaats' => 'bouwel',
            'postcode' => '2288',
            'admin' => true,
        ]);

        //offers seeding
        DB::table('offers')->insert([
            'naam' => 'wortels',
            'aantal' => 160,
            'prijs' => 16.75,
            'foto' => '1-1-1.jpg',
            'foto2' => null,
            'foto3' => null,
            'user_id' => 1,
        ]);
        DB::table('offers')->insert([
            'naam' => 'brocolli',
            'aantal' => 45,
            'prijs' => 5.75,
            'foto' => '1-2-1.jpg',
            'foto2' => '1-2-2.jpg',
            'foto3' => null,
            'user_id' => 1,
        ]);
        DB::table('offers')->insert([
            'naam' => 'courgetten',
            'aantal' => 81,
            'prijs' => 2.75,
            'foto' => '1-3-1.jpg',
            'foto2' => '1-3-2.jpg',
            'foto3' => '1-3-3.jpg',
            'user_id' => 1,
        ]);
        DB::table('offers')->insert([
            'naam' => 'pompoenen',
            'aantal' => 17,
            'prijs' => 7.80,
            'foto' => '2-4-1.jpg',
            'foto2' => null,
            'foto3' => null,
            'user_id' => 2,
        ]);
    }
}
