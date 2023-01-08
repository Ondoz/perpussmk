<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategorisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kategoris')->delete();
        
        \DB::table('kategoris')->insert(array (
            0 => 
            array (
                'created_at' => '2021-12-04 22:22:04',
                'id' => 1,
                'name' => 'Kelas 10',
                'slug' => 'kelas-10',
                'updated_at' => '2021-12-04 22:22:04',
            ),
            1 => 
            array (
                'created_at' => '2021-12-04 22:22:04',
                'id' => 2,
                'name' => 'Kelas 11',
                'slug' => 'kelas-11',
                'updated_at' => '2021-12-04 22:22:04',
            ),
        ));
        
        
    }
}