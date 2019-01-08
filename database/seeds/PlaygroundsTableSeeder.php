<?php

use Illuminate\Database\Seeder;

class PlaygroundsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('playgrounds')->delete();
        
        \DB::table('playgrounds')->insert(array (
            0 => 
            array (
                'id' => 14,
                'title' => 'Заславский Замок',
                'description' => NULL,
                'short_description' => NULL,
                'google_map' => NULL,
                'address' => NULL,
                'slug' => 'zaslavskiy-zamok',
                'created_at' => '2018-12-28 12:39:09',
                'updated_at' => '2018-12-28 12:39:09',
            ),
            1 => 
            array (
                'id' => 15,
                'title' => 'Комарово',
                'description' => NULL,
                'short_description' => NULL,
                'google_map' => NULL,
                'address' => NULL,
                'slug' => 'komarovo',
                'created_at' => '2018-12-28 12:39:20',
                'updated_at' => '2018-12-28 12:39:20',
            ),
            2 => 
            array (
                'id' => 16,
                'title' => 'Деревня',
                'description' => NULL,
                'short_description' => NULL,
                'google_map' => NULL,
                'address' => NULL,
                'slug' => 'derevnya',
                'created_at' => '2018-12-28 12:39:30',
                'updated_at' => '2018-12-28 12:39:30',
            ),
            3 => 
            array (
                'id' => 17,
                'title' => 'Раков',
                'description' => NULL,
                'short_description' => NULL,
                'google_map' => NULL,
                'address' => NULL,
                'slug' => 'rakov',
                'created_at' => '2018-12-28 12:39:44',
                'updated_at' => '2018-12-28 12:39:44',
            ),
        ));
        
        
    }
}