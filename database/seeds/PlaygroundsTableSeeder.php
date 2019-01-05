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
                'id' => 1,
                'title' => 'В. Хоружей',
                'description' => NULL,
                'google_map' => NULL,
                'address' => NULL,
                'slug' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Заславский Замок',
                'description' => NULL,
                'google_map' => NULL,
                'address' => NULL,
                'slug' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Комарово',
                'description' => NULL,
                'google_map' => NULL,
                'address' => NULL,
                'slug' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Деревня',
                'description' => NULL,
                'google_map' => NULL,
                'address' => NULL,
                'slug' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Раков',
                'description' => NULL,
                'google_map' => NULL,
                'address' => NULL,
                'slug' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}