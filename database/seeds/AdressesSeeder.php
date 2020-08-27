<?php

use Illuminate\Database\Seeder;

class AdressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Adresses::class,100)->create()
;    }
}
