<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('news')->delete();
        
        \DB::table('news')->insert(array (
            0 => 
            array (
                'id' => 3,
                'title' => 'blyat',
                'img' => '4pYHuUafnGr57cDBMM2sYhMRmbNyxJmK.jpg',
                'body' => 'gfnfngdfnfgnfgn',
                'created_at' => '2018-12-19 15:42:59',
                'updated_at' => '2018-12-19 15:42:59',
            ),
        ));
        
        
    }
}