<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('slug','$admin')->first();
        $entraineur = Role::where('slug', 'coach')->first();
        $createTasks = Permission::where('slug','create-tasks')->first();
        $manageUsers = Permission::where('slug','manage-users')->first();

        $user1 = new User();
        $user1->username = 'hassen ';
        $user1->first_name ='abdelkader';
        $user1->last_name ='derbali';
        $user1->slug ='hassenderbali';
        $user1->email = 'derbali@gmail.com';
        $user1->adress_id='1';
        $user1->contact_id='2';
        $user1->password = bcrypt('secret');
        $user1->save();
        $user1->roles()->attach($admin);
        $user1->permissions()->attach($manageUsers);


        $user2 = new User();
        $user2->username = 'amira ';
        $user2->first_name ='amira';
        $user2->last_name ='jenayh';
        $user2->slug ='amiramira';
        $user2->email = 'amirae@gmail.com';
        $user2->adress_id='3';
        $user2->contact_id='4';
        $user2->password = bcrypt('secret');
        $user2->save();
        $user2->roles()->attach($entraineur);
        $user2->permissions()->attach( $createTasks);
    }
}
