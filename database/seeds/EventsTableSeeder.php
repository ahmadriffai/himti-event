<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        $event = DB::table('events');
        $event->truncate();

        for ($i=1; $i <= 50 ; $i++) {
          $event->insert([
            'judul' => $faker->sentence(6),
            'deskripsi' => $faker->realText(200,2),
            'kuota' => $faker->numberBetween(25,40),
            'tanggal' => $faker->date('Y-m-d'),
            'tempat' => $faker->address,
            'url_gambar' => 'https://www.fillmurray.com/640/360',
            'kategori_id' => 1
          ]);
        }
    }
}
