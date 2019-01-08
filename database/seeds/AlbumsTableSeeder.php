<?php

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('albums')->delete();
        
        \DB::table('albums')->insert(array (
            0 => 
            array (
                'id' => 1,
                'album_name' => 'strikeball',
                'playground_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'album_name' => 'archery tag',
                'playground_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 7,
                'album_name' => 'В.Хоружей',
                'playground_id' => 13,
                'created_at' => '2018-12-28 12:38:54',
                'updated_at' => '2018-12-28 12:38:54',
            ),
            3 => 
            array (
                'id' => 8,
                'album_name' => 'Заславский Замок',
                'playground_id' => 14,
                'created_at' => '2018-12-28 12:39:09',
                'updated_at' => '2018-12-28 12:39:09',
            ),
            4 => 
            array (
                'id' => 9,
                'album_name' => 'Комарово',
                'playground_id' => 15,
                'created_at' => '2018-12-28 12:39:20',
                'updated_at' => '2018-12-28 12:39:20',
            ),
            5 => 
            array (
                'id' => 10,
                'album_name' => 'Деревня',
                'playground_id' => 16,
                'created_at' => '2018-12-28 12:39:30',
                'updated_at' => '2018-12-28 12:39:30',
            ),
            6 => 
            array (
                'id' => 11,
                'album_name' => 'Раков',
                'playground_id' => 17,
                'created_at' => '2018-12-28 12:39:44',
                'updated_at' => '2018-12-28 12:39:44',
            ),
        ));
        
        
    }
}