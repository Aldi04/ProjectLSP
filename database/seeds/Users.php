<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::truncate();

        $d = new \App\User;
        $d->name = "Jumi";
        $d->email = "Jumialdi@gmail.com";
        $d->password = \Hash::make("jumialdi0104");
        $d->level = "Admin Utama";
        
        $d->save();
    }
}
