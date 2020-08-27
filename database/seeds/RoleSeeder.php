<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {

            $admin= new Role();
            $admin->name ='Admin';
            $admin->slug ='admin';
            $admin->description ='admin';
            $admin->save();

            $joueur = new Role();
            $joueur->name = ' players';
            $joueur->slug = 'player';
            $joueur->description = 'joueur';
            $joueur->save();

            $entraineur = new Role();
            $entraineur->name ='Coach';
            $entraineur->slug ='coach';
            $entraineur->description  = 'enteraineur A';
            $entraineur->save();
        }
    }
}
