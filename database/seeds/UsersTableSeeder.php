<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
       \DB::table('users')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Кемал Каландаров',
                    'role' => 2,
                    'email' => 'prince_of_love93@mail.ru',
                    'email_verified_at' => NULL,
                    'password' => '$2y$10$lxFTH0AeNn3KbRxSaDDdyea.o9DaJazuvrGU0Nlxm9NTvmaa2hd66',
                    'remember_token' => 'dN0Ycu5z0dtvjnMpmKWiHzTtKket2UojHwx9xfj7aR79EvXcGGjOjgGUvbnj',
                    'created_at' => '2018-12-18 09:18:41',
                    'updated_at' => '2018-12-18 09:18:41',
                ),
        ));


    }
}