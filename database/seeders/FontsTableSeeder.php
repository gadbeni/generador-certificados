<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FontsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fonts')->delete();
        
        \DB::table('fonts')->insert(array (
            0 => 
            array (
                'created_at' => '2023-10-24 13:01:11',
                'font_name' => 'Open Sans',
                'font_url' => 'https://fonts.googleapis.com/css2?family=Open+Sans&display=swap',
                'id' => 1,
                'updated_at' => '2023-10-24 13:01:11',
            ),
            1 => 
            array (
                'created_at' => '2023-10-24 13:01:00',
                'font_name' => 'Roboto',
                'font_url' => 'https://fonts.googleapis.com/css2?family=Roboto&display=swap',
                'id' => 2,
                'updated_at' => '2023-10-24 14:23:26',
            ),
            2 => 
            array (
                'created_at' => '2023-10-24 13:01:51',
                'font_name' => 'Lato',
                'font_url' => 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap',
                'id' => 3,
                'updated_at' => '2023-10-24 13:01:51',
            ),
            3 => 
            array (
                'created_at' => '2023-10-24 13:02:08',
                'font_name' => 'Lora',
                'font_url' => 'https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap',
                'id' => 4,
                'updated_at' => '2023-10-24 13:02:08',
            ),
        ));
        
        
    }
}