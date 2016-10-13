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
        DB::table('users')->insert([
            'voornaam' => 'lander',
            'achternaam' => 'verschueren',
            'password' => bcrypt('lander'),
            'email' => 'landerverschueren@gmail.com',
            'adres' => 'lorem ipsum',
            'woonplaats' => 'lorem',
            'postcode' => '2000',
        ]);
        DB::table('users')->insert([
            'voornaam' => 'thomas',
            'achternaam' => 'van roy',
            'password' => bcrypt('thomas'),
            'email' => 'thomasvanroy08@gmail.com',
            'adres' => 'lorem ipsum',
            'woonplaats' => 'lorem',
            'postcode' => '2200',
        ]);
    }
}
