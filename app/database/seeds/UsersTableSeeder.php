<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        $users = array(
            "firstname"=>"david","lastname"=>"mintlete","pasword"=>"fancypants"
        );

        // Uncomment the below to run the seeder
        // DB::table('users')->insert($users);
    }

}