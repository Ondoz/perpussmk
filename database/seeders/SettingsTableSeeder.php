<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'uuid' => '4eed49c1-545e-4a22-80b9-f415c0b43465',
                'type' => 'plain',
                'key' => 'denda_harian',
                'value' => '2000',
                'created_at' => '2022-03-26 22:00:47',
                'updated_at' => '2022-03-26 22:00:47',
            ),
            1 => 
            array (
                'id' => 2,
                'uuid' => '9bbd85c6-8a12-484c-8a29-aff99eba5497',
                'type' => 'plain',
                'key' => 'denda_kerusakan',
                'value' => '50000',
                'created_at' => '2022-03-26 22:00:47',
                'updated_at' => '2022-03-26 22:00:47',
            ),
        ));
        
        
    }
}