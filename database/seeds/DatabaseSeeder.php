<?php

use App\Contact;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
       $this->call(UserSeeder::class);
        $this->call(JoueurSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(AdressesSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(PerformanceSeeder::class);
        $this->call(SuspendusSeeder::class);
        $this->call(BlesseurSeeder::class);
        $this->call(EquipeSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(MatchSeeder::class);
        $this->call(ExerciceSeeder::class);

    }

}
