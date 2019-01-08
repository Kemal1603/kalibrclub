<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('photos')->delete();
        
        \DB::table('photos')->insert(array (
            0 => 
            array (
                'id' => 41,
                'albums_id' => 1,
                'title' => '1',
                'img' => 'arhZz9f6GbfCUWGwwlCmoNbpw58ZCgUU.jpg',
                'created_at' => '2018-12-20 10:46:32',
                'updated_at' => '2018-12-20 10:46:32',
            ),
            1 => 
            array (
                'id' => 42,
                'albums_id' => 1,
                'title' => '3',
                'img' => 'r0o9ccoDWMcf7zO9iSOfIzEQuGIGy677.jpg',
                'created_at' => '2018-12-20 10:46:55',
                'updated_at' => '2018-12-20 10:46:55',
            ),
            2 => 
            array (
                'id' => 43,
                'albums_id' => 1,
                'title' => '4',
                'img' => 'fP0iNoUPZCu0rva5XbQzJFoADqgkw8y3.jpg',
                'created_at' => '2018-12-20 10:47:12',
                'updated_at' => '2018-12-20 10:47:12',
            ),
            3 => 
            array (
                'id' => 44,
                'albums_id' => 1,
                'title' => '5',
                'img' => 'fTFrVwzUMuYHYHkhq5jPrRqerH8PngNH.jpg',
                'created_at' => '2018-12-20 10:47:28',
                'updated_at' => '2018-12-20 10:47:28',
            ),
            4 => 
            array (
                'id' => 45,
                'albums_id' => 1,
                'title' => '6',
                'img' => 'ZMQWSCbGFdOgiNvgLp7FHExoAt0BBGLe.jpg',
                'created_at' => '2018-12-20 10:47:50',
                'updated_at' => '2018-12-20 10:47:50',
            ),
            5 => 
            array (
                'id' => 46,
                'albums_id' => 1,
                'title' => '7',
                'img' => '8kboGdfUiVdTREQEMpIQJsAAmdNVeYzU.jpg',
                'created_at' => '2018-12-20 10:48:01',
                'updated_at' => '2018-12-20 10:48:01',
            ),
            6 => 
            array (
                'id' => 47,
                'albums_id' => 1,
                'title' => '9',
                'img' => 'cVq2GpQm59edQx9QT19k8zzzNXM3DVYx.jpg',
                'created_at' => '2018-12-20 10:48:17',
                'updated_at' => '2018-12-20 10:48:17',
            ),
            7 => 
            array (
                'id' => 48,
                'albums_id' => 1,
                'title' => '12',
                'img' => 'iEwnq3P9yl03WOSgepaBWD162t19x2Ly.jpg',
                'created_at' => '2018-12-20 10:48:30',
                'updated_at' => '2018-12-20 10:48:30',
            ),
            8 => 
            array (
                'id' => 49,
                'albums_id' => 2,
                'title' => '1',
                'img' => 'V5P1YHgWtRuaFgVZjz4dy6J3b5Z0ufC7.jpg',
                'created_at' => '2018-12-20 11:04:19',
                'updated_at' => '2018-12-20 11:04:19',
            ),
            9 => 
            array (
                'id' => 51,
                'albums_id' => 2,
                'title' => '9',
                'img' => 'LIF00drWFAmon0DlhCfS1j327jHivPkk.jpg',
                'created_at' => '2018-12-20 11:04:41',
                'updated_at' => '2018-12-20 11:04:41',
            ),
            10 => 
            array (
                'id' => 52,
                'albums_id' => 2,
                'title' => '3',
                'img' => 'BhZ54o63uaTl2B9XnpLhbpmVhZLH695e.jpg',
                'created_at' => '2018-12-20 11:04:59',
                'updated_at' => '2018-12-20 11:04:59',
            ),
            11 => 
            array (
                'id' => 53,
                'albums_id' => 2,
                'title' => '10',
                'img' => 'zjTYdHyQ9m6bmH7Yg2LtDXcLU7UXmQlB.jpg',
                'created_at' => '2018-12-20 11:05:22',
                'updated_at' => '2018-12-20 11:05:22',
            ),
            12 => 
            array (
                'id' => 54,
                'albums_id' => 2,
                'title' => '5',
                'img' => 'jUrR4sPGt6mIIiG6xu7nedo6D7ymw6Nx.jpg',
                'created_at' => '2018-12-20 11:05:56',
                'updated_at' => '2018-12-20 11:05:56',
            ),
            13 => 
            array (
                'id' => 55,
                'albums_id' => 2,
                'title' => '6',
                'img' => 'hDPU0D78mEhLKpjvyKPtCxebhYhTKtsj.jpg',
                'created_at' => '2018-12-20 11:06:39',
                'updated_at' => '2018-12-20 11:06:39',
            ),
            14 => 
            array (
                'id' => 56,
                'albums_id' => 2,
                'title' => '7',
                'img' => 'kL9MGeIbbOMrO6kPf1T3Qc2xTad9H4mz.jpg',
                'created_at' => '2018-12-20 11:07:00',
                'updated_at' => '2018-12-20 11:07:00',
            ),
            15 => 
            array (
                'id' => 57,
                'albums_id' => 2,
                'title' => '8',
                'img' => 'FELHaAVtxAdcWWTzwpv3lkn1t5PHpKr4.jpg',
                'created_at' => '2018-12-20 11:07:32',
                'updated_at' => '2018-12-20 11:07:32',
            ),
            16 => 
            array (
                'id' => 58,
                'albums_id' => 2,
                'title' => '11',
                'img' => 'm9EwYdPCcIIGJxtAXcjHsKobAJQmryyK.jpg',
                'created_at' => '2018-12-20 11:07:50',
                'updated_at' => '2018-12-20 11:07:50',
            ),
            17 => 
            array (
                'id' => 66,
                'albums_id' => 9,
                'title' => 'aaaaaaaaaaaaa',
                'img' => 'rzBhy7nHD1qsLDZMQoPc8TQGJLwL1FZM.jpg',
                'created_at' => '2018-12-29 09:00:25',
                'updated_at' => '2018-12-29 09:00:25',
            ),
            18 => 
            array (
                'id' => 67,
                'albums_id' => 10,
                'title' => 'suka yebanaya',
                'img' => 'kcdyUv1a31HXXz6YmDj7MyF4jHOmUkOO.jpg',
                'created_at' => '2018-12-29 09:00:43',
                'updated_at' => '2018-12-29 09:00:43',
            ),
            19 => 
            array (
                'id' => 68,
                'albums_id' => 11,
                'title' => 'suka yebanaya',
                'img' => 'iAKca8apIhE4Ofk2G2ZIXhthQOblBtQY.jpg',
                'created_at' => '2018-12-29 09:01:12',
                'updated_at' => '2018-12-29 09:01:12',
            ),
            20 => 
            array (
                'id' => 69,
                'albums_id' => 8,
                'title' => 'fgdfgdf',
                'img' => 'DCUdO3uZMj0remxpRNsKD9EVB1RaCg1d.jpg',
                'created_at' => '2019-01-04 16:31:20',
                'updated_at' => '2019-01-04 16:31:20',
            ),
            21 => 
            array (
                'id' => 70,
                'albums_id' => 8,
                'title' => '4',
                'img' => 'wFTZSjgLJxkvmE84Anq4MUMMuiFdGLB8.jpg',
                'created_at' => '2019-01-05 16:41:15',
                'updated_at' => '2019-01-05 16:41:15',
            ),
        ));
        
        
    }
}