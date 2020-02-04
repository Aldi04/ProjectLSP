<?php

use Illuminate\Database\Seeder;

class KategoriProduk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::truncate();

        $d = new \App\Category;
        $d->kategori = "Makanan";

        $d->save();
    }
}
