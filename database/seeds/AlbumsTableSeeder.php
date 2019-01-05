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
        ));
        
        
    }
}