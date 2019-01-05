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
                'id' => 28,
                'albums_id' => NULL,
                'title' => '3',
                'img' => 'uLVQSD4vV2XoEA2ZHWbO0DVM98etMWLU.jpg',
                'created_at' => '2018-12-19 11:49:37',
                'updated_at' => '2018-12-19 11:49:37',
            ),
            1 => 
            array (
                'id' => 29,
                'albums_id' => NULL,
                'title' => '4',
                'img' => 'xpMGNLiiHDq0MhyOJ4emiQx2rZf9lU3R.jpg',
                'created_at' => '2018-12-19 11:49:53',
                'updated_at' => '2018-12-19 11:49:53',
            ),
            2 => 
            array (
                'id' => 30,
                'albums_id' => NULL,
                'title' => '5',
                'img' => '2NqVK5BMtUeSMJP86ut3BSRZbpUdZ2Yt.jpg',
                'created_at' => '2018-12-19 11:50:06',
                'updated_at' => '2018-12-19 11:50:06',
            ),
            3 => 
            array (
                'id' => 31,
                'albums_id' => NULL,
                'title' => '6',
                'img' => '7z5YfJYLPoT2W4o0Ag9lEm8wpoXuVpb3.jpg',
                'created_at' => '2018-12-19 11:50:21',
                'updated_at' => '2018-12-19 11:50:21',
            ),
            4 => 
            array (
                'id' => 32,
                'albums_id' => NULL,
                'title' => '7',
                'img' => '8DSveXP1jq6YHncmIIqVIlRxMM5f76jO.jpg',
                'created_at' => '2018-12-19 11:50:36',
                'updated_at' => '2018-12-19 11:50:36',
            ),
            5 => 
            array (
                'id' => 33,
                'albums_id' => NULL,
                'title' => '9',
                'img' => 'x44ReZZqGZp4G6LAR4wUbkmVhcIAl6SE.jpg',
                'created_at' => '2018-12-19 11:51:05',
                'updated_at' => '2018-12-19 11:51:05',
            ),
            6 => 
            array (
                'id' => 34,
                'albums_id' => NULL,
                'title' => '12',
                'img' => '5ZwGG2IME4kewgI65CP0Sx08uLgKg9o0.jpg',
                'created_at' => '2018-12-19 11:51:29',
                'updated_at' => '2018-12-19 11:51:29',
            ),
            7 => 
            array (
                'id' => 41,
                'albums_id' => 1,
                'title' => '1',
                'img' => 'arhZz9f6GbfCUWGwwlCmoNbpw58ZCgUU.jpg',
                'created_at' => '2018-12-20 10:46:32',
                'updated_at' => '2018-12-20 10:46:32',
            ),
            8 => 
            array (
                'id' => 42,
                'albums_id' => 1,
                'title' => '3',
                'img' => 'r0o9ccoDWMcf7zO9iSOfIzEQuGIGy677.jpg',
                'created_at' => '2018-12-20 10:46:55',
                'updated_at' => '2018-12-20 10:46:55',
            ),
            9 => 
            array (
                'id' => 43,
                'albums_id' => 1,
                'title' => '4',
                'img' => 'fP0iNoUPZCu0rva5XbQzJFoADqgkw8y3.jpg',
                'created_at' => '2018-12-20 10:47:12',
                'updated_at' => '2018-12-20 10:47:12',
            ),
            10 => 
            array (
                'id' => 44,
                'albums_id' => 1,
                'title' => '5',
                'img' => 'fTFrVwzUMuYHYHkhq5jPrRqerH8PngNH.jpg',
                'created_at' => '2018-12-20 10:47:28',
                'updated_at' => '2018-12-20 10:47:28',
            ),
            11 => 
            array (
                'id' => 45,
                'albums_id' => 1,
                'title' => '6',
                'img' => 'ZMQWSCbGFdOgiNvgLp7FHExoAt0BBGLe.jpg',
                'created_at' => '2018-12-20 10:47:50',
                'updated_at' => '2018-12-20 10:47:50',
            ),
            12 => 
            array (
                'id' => 46,
                'albums_id' => 1,
                'title' => '7',
                'img' => '8kboGdfUiVdTREQEMpIQJsAAmdNVeYzU.jpg',
                'created_at' => '2018-12-20 10:48:01',
                'updated_at' => '2018-12-20 10:48:01',
            ),
            13 => 
            array (
                'id' => 47,
                'albums_id' => 1,
                'title' => '9',
                'img' => 'cVq2GpQm59edQx9QT19k8zzzNXM3DVYx.jpg',
                'created_at' => '2018-12-20 10:48:17',
                'updated_at' => '2018-12-20 10:48:17',
            ),
            14 => 
            array (
                'id' => 48,
                'albums_id' => 1,
                'title' => '12',
                'img' => 'iEwnq3P9yl03WOSgepaBWD162t19x2Ly.jpg',
                'created_at' => '2018-12-20 10:48:30',
                'updated_at' => '2018-12-20 10:48:30',
            ),
            15 => 
            array (
                'id' => 49,
                'albums_id' => 2,
                'title' => '1',
                'img' => 'V5P1YHgWtRuaFgVZjz4dy6J3b5Z0ufC7.jpg',
                'created_at' => '2018-12-20 11:04:19',
                'updated_at' => '2018-12-20 11:04:19',
            ),
            16 => 
            array (
                'id' => 51,
                'albums_id' => 2,
                'title' => '9',
                'img' => 'LIF00drWFAmon0DlhCfS1j327jHivPkk.jpg',
                'created_at' => '2018-12-20 11:04:41',
                'updated_at' => '2018-12-20 11:04:41',
            ),
            17 => 
            array (
                'id' => 52,
                'albums_id' => 2,
                'title' => '3',
                'img' => 'BhZ54o63uaTl2B9XnpLhbpmVhZLH695e.jpg',
                'created_at' => '2018-12-20 11:04:59',
                'updated_at' => '2018-12-20 11:04:59',
            ),
            18 => 
            array (
                'id' => 53,
                'albums_id' => 2,
                'title' => '10',
                'img' => 'zjTYdHyQ9m6bmH7Yg2LtDXcLU7UXmQlB.jpg',
                'created_at' => '2018-12-20 11:05:22',
                'updated_at' => '2018-12-20 11:05:22',
            ),
            19 => 
            array (
                'id' => 54,
                'albums_id' => 2,
                'title' => '5',
                'img' => 'jUrR4sPGt6mIIiG6xu7nedo6D7ymw6Nx.jpg',
                'created_at' => '2018-12-20 11:05:56',
                'updated_at' => '2018-12-20 11:05:56',
            ),
            20 => 
            array (
                'id' => 55,
                'albums_id' => 2,
                'title' => '6',
                'img' => 'hDPU0D78mEhLKpjvyKPtCxebhYhTKtsj.jpg',
                'created_at' => '2018-12-20 11:06:39',
                'updated_at' => '2018-12-20 11:06:39',
            ),
            21 => 
            array (
                'id' => 56,
                'albums_id' => 2,
                'title' => '7',
                'img' => 'kL9MGeIbbOMrO6kPf1T3Qc2xTad9H4mz.jpg',
                'created_at' => '2018-12-20 11:07:00',
                'updated_at' => '2018-12-20 11:07:00',
            ),
            22 => 
            array (
                'id' => 57,
                'albums_id' => 2,
                'title' => '8',
                'img' => 'FELHaAVtxAdcWWTzwpv3lkn1t5PHpKr4.jpg',
                'created_at' => '2018-12-20 11:07:32',
                'updated_at' => '2018-12-20 11:07:32',
            ),
            23 => 
            array (
                'id' => 58,
                'albums_id' => 2,
                'title' => '11',
                'img' => 'm9EwYdPCcIIGJxtAXcjHsKobAJQmryyK.jpg',
                'created_at' => '2018-12-20 11:07:50',
                'updated_at' => '2018-12-20 11:07:50',
            ),
        ));
        
        
    }
}