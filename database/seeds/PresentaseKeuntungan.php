<?php

use Illuminate\Database\Seeder;

class PresentaseKeuntungan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\PresentaseKeuntungan::truncate();

        $d = new \App\PresentaseKeuntungan;
        $d->presentase_keuntungan = 10;

        $d->save();
    }
}
