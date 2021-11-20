<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'uuid' => '6dc5a984-6b7c-4570-bb1d-6277da53cf33',
                'name' => 'Nettie Koepp',
                'email' => 'louie.kunde@example.org',
                'email_verified_at' => '2021-11-20 19:10:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'hEJUGpTA8U',
                'created_at' => '2021-11-20 19:10:43',
                'updated_at' => '2021-11-20 19:10:43',
            ),
            1 => 
            array (
                'id' => 2,
                'uuid' => '038e209a-3e2c-4795-9c24-de3b8d62c002',
                'name' => 'Camryn Cruickshank',
                'email' => 'fritsch.mckenzie@example.com',
                'email_verified_at' => '2021-11-20 19:10:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '72B4sB3yp0',
                'created_at' => '2021-11-20 19:10:43',
                'updated_at' => '2021-11-20 19:10:43',
            ),
            2 => 
            array (
                'id' => 3,
                'uuid' => '3d76ca4d-f7d2-42d3-84b2-3bc0719645ba',
                'name' => 'Ally Farrell',
                'email' => 'baron57@example.com',
                'email_verified_at' => '2021-11-20 19:10:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'XmpcDwyqYR',
                'created_at' => '2021-11-20 19:10:43',
                'updated_at' => '2021-11-20 19:10:43',
            ),
            3 => 
            array (
                'id' => 4,
                'uuid' => 'd51c25a9-3649-4b27-8317-782adcb6ea7b',
                'name' => 'Troy Kertzmann',
                'email' => 'jayden.leffler@example.org',
                'email_verified_at' => '2021-11-20 19:10:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'Yl8mVUHWAW',
                'created_at' => '2021-11-20 19:10:43',
                'updated_at' => '2021-11-20 19:10:43',
            ),
            4 => 
            array (
                'id' => 5,
                'uuid' => 'df7412f4-7289-4091-99db-c9ed81e8c767',
                'name' => 'Prof. Allison Swift II',
                'email' => 'nicolas.pasquale@example.net',
                'email_verified_at' => '2021-11-20 19:10:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'R2AhXZTkjD',
                'created_at' => '2021-11-20 19:10:43',
                'updated_at' => '2021-11-20 19:10:43',
            ),
            5 => 
            array (
                'id' => 6,
                'uuid' => '65146457-293c-4afc-8a28-6253803ba2c7',
                'name' => 'Moises Ebert',
                'email' => 'ulises.shanahan@example.org',
                'email_verified_at' => '2021-11-20 19:10:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'F03oTqNejS',
                'created_at' => '2021-11-20 19:10:43',
                'updated_at' => '2021-11-20 19:10:43',
            ),
            6 => 
            array (
                'id' => 7,
                'uuid' => '95951b86-bfc7-463f-8587-afec63c954de',
                'name' => 'Ladarius Yost',
                'email' => 'rrohan@example.org',
                'email_verified_at' => '2021-11-20 19:10:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '6FTU3pAt9T',
                'created_at' => '2021-11-20 19:10:43',
                'updated_at' => '2021-11-20 19:10:43',
            ),
            7 => 
            array (
                'id' => 8,
                'uuid' => 'f892e7bf-9242-4ef5-8caf-8aacc720fc04',
                'name' => 'Belle Brakus DVM',
                'email' => 'xohara@example.com',
                'email_verified_at' => '2021-11-20 19:10:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'rg33hHglFO',
                'created_at' => '2021-11-20 19:10:43',
                'updated_at' => '2021-11-20 19:10:43',
            ),
            8 => 
            array (
                'id' => 9,
                'uuid' => '068f5d5b-834e-436d-aefd-f44364d38be6',
                'name' => 'Polly Moen I',
                'email' => 'garland.kiehn@example.net',
                'email_verified_at' => '2021-11-20 19:10:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'eIPCXHRncI',
                'created_at' => '2021-11-20 19:10:43',
                'updated_at' => '2021-11-20 19:10:43',
            ),
            9 => 
            array (
                'id' => 10,
                'uuid' => 'aea7ae16-e804-4f95-8951-4a6b848d75b9',
                'name' => 'Fermin Streich III',
                'email' => 'zoila.schmidt@example.net',
                'email_verified_at' => '2021-11-20 19:10:43',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'yUqyR35vX7',
                'created_at' => '2021-11-20 19:10:43',
                'updated_at' => '2021-11-20 19:10:43',
            ),
            10 => 
            array (
                'id' => 11,
                'uuid' => '8accdf74-03f0-4f26-88dc-ff8236fe4de4',
                'name' => 'Gilang wahyudi',
                'email' => 'ondozwahyudi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1fpweNxeoRoTh6SfnreAduXCQjTGLL6L7u97zElbimEfFmpbVeXhu',
                'remember_token' => NULL,
                'created_at' => '2021-11-20 19:11:09',
                'updated_at' => '2021-11-20 19:11:09',
            ),
        ));
        
        
    }
}