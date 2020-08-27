<?php

use Illuminate\Database\Seeder;

class SuspendusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Suspendus::class,30)->create();
    }
}
