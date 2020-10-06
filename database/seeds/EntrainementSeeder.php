<?php

use Illuminate\Database\Seeder;

class EntrainementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Entainement::class,100)->create();
    }
}
