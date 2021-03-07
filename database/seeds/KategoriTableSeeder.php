<?php

use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $kategori = DB::table('kategori');
        $kategori->insert(['kategori' => 'WorkShop']);
        $kategori->insert(['kategori' => 'Seminar Nasional']);
        $kategori->insert(['kategori' => 'Seminar KP']);
    }
}
