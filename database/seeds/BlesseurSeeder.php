<?php

use Illuminate\Database\Seeder;

class BlesseurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Blesseur::class,200)->create();
    }
}
