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
      DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(KategoriTableSeeder::class);
        $this->call(EventsTableSeeder::class);
      DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
