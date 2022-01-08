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
                'id' => 1,
                'uuid' => '0b28f4b1-cb22-4661-8a06-47634dd11822',
                'name' => 'Adult Fiction',
                'slug' => 'adult-fiction',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            1 => 
            array (
                'id' => 2,
                'uuid' => '18b83de8-702c-45f1-a802-89fd6b5da6f1',
                'name' => 'Art, Music & Photography',
                'slug' => 'art-music-photography',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            2 => 
            array (
                'id' => 3,
                'uuid' => 'bffec8e5-057e-4cb4-857d-8c8c509ee55e',
                'name' => 'Biographies & Memoirs',
                'slug' => 'biographies-memoirs',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            3 => 
            array (
                'id' => 4,
                'uuid' => 'cab7a073-3250-4a45-8259-6af2ca355bf1',
                'name' => 'Buddhism & Hinduism',
                'slug' => 'buddhism-hinduism',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            4 => 
            array (
                'id' => 5,
                'uuid' => '228a7f71-0826-49cf-808b-d03f010a403a',
                'name' => 'Business & Investing',
                'slug' => 'business-investing',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            5 => 
            array (
                'id' => 9,
                'uuid' => 'a31d3c6f-9937-4a72-af1c-5ebbb5082daf',
                'name' => 'Christianity',
                'slug' => 'christianity',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            6 => 
            array (
                'id' => 10,
                'uuid' => '95ebd5e4-a658-4a1b-9063-32aaf1a1c491',
                'name' => 'Classics',
                'slug' => 'classics',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            7 => 
            array (
                'id' => 11,
                'uuid' => 'e41b9121-4270-4e9d-900f-703b7eca9855',
                'name' => 'Comics & Graphic Novels',
                'slug' => 'comics-graphic-novels',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            8 => 
            array (
                'id' => 12,
                'uuid' => '1e9b3a59-7db1-479e-bd3a-46212de73daf',
                'name' => 'Computers & Technology',
                'slug' => 'computers-technology',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            9 => 
            array (
                'id' => 13,
                'uuid' => '02032c86-0106-427b-ab76-391d492a60b2',
                'name' => 'Education & Test Preparation',
                'slug' => 'education-test-preparation',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            10 => 
            array (
                'id' => 14,
                'uuid' => '6743b8be-b2bd-4cff-8caa-f5cc56511eb0',
                'name' => 'Fiction & Literature',
                'slug' => 'fiction-literature',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            11 => 
            array (
                'id' => 15,
                'uuid' => '4d5cc01f-8389-4590-b8a0-2f048b5b95eb',
                'name' => 'Food, Drink & Cookbook',
                'slug' => 'food-drink-cookbook',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            12 => 
            array (
                'id' => 16,
                'uuid' => '89825860-ce23-4f6d-8fc8-d4a07448aa52',
                'name' => 'Health, Fitness & Wellness',
                'slug' => 'health-fitness-wellness',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            13 => 
            array (
                'id' => 17,
                'uuid' => '1a2f49b6-36a2-4214-b57c-dbf1e5b27bfb',
                'name' => 'Historical Fiction',
                'slug' => 'historical-fiction',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            14 => 
            array (
                'id' => 18,
                'uuid' => '9fdfd25f-49d5-4e83-97f3-453c9ca6ab41',
                'name' => 'History',
                'slug' => 'history',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            15 => 
            array (
                'id' => 19,
                'uuid' => '51e9f931-1565-40c9-8fe3-91a39c65578c',
                'name' => 'Home & Architecture',
                'slug' => 'home-architecture',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            16 => 
            array (
                'id' => 20,
                'uuid' => 'ef416092-edc7-4a97-b045-8ad8fb43ea9a',
                'name' => 'Horror & Paranormal',
                'slug' => 'horror-paranormal',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            17 => 
            array (
                'id' => 21,
                'uuid' => 'cd30f66d-95da-4c40-afb0-16e1b14d5229',
                'name' => 'Humor & Comedy',
                'slug' => 'humor-comedy',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            18 => 
            array (
                'id' => 22,
                'uuid' => '345f7a15-8564-4199-aafe-c855c3739782',
                'name' => 'Islam',
                'slug' => 'islam',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            19 => 
            array (
                'id' => 23,
                'uuid' => '5d973686-f0c2-40ab-aa24-130b88cf49fa',
                'name' => 'Law & Tax',
                'slug' => 'law-tax',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            20 => 
            array (
                'id' => 24,
                'uuid' => '6d477397-10d6-4255-96f6-85817395a0a1',
                'name' => 'Manga, Manhua & Manhwa',
                'slug' => 'manga-manhua-manhwa',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            21 => 
            array (
                'id' => 25,
                'uuid' => '4217f8cc-73f0-4fd8-80ed-5275bd61e73e',
                'name' => 'Motivation & Self-Help',
                'slug' => 'motivation-self-help',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            22 => 
            array (
                'id' => 26,
                'uuid' => '225c2773-d70d-494b-bf57-d59ae862af73',
                'name' => 'Mystery, Thriller & Suspense',
                'slug' => 'mystery-thriller-suspense',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            23 => 
            array (
                'id' => 27,
                'uuid' => 'a898157a-c73a-4c87-903c-d9014b17467c',
                'name' => 'Non-fiction',
                'slug' => 'non-fiction',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            24 => 
            array (
                'id' => 28,
                'uuid' => 'b19a55b7-4dba-447e-be39-6ee440cd81ab',
                'name' => 'Parenting & Relationships',
                'slug' => 'parenting-relationships',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            25 => 
            array (
                'id' => 29,
                'uuid' => 'd2738fc2-a241-4a14-bad8-974a8f38fd78',
                'name' => 'Philosophy',
                'slug' => 'philosophy',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            26 => 
            array (
                'id' => 30,
                'uuid' => '000b7bb2-837e-48ce-aec6-95e0197a3ced',
                'name' => 'Poem & Short Story',
                'slug' => 'poem-short-story',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            27 => 
            array (
                'id' => 31,
                'uuid' => 'ec5f6c62-7ee4-4cfd-8649-f953164756a9',
                'name' => 'Politics, Affairs & Social Sciences',
                'slug' => 'politics-affairs-social-sciences',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            28 => 
            array (
                'id' => 32,
                'uuid' => '1014fc9a-9c71-4b48-abdd-484c41bd4589',
                'name' => 'Professional, Engineering & Technical',
                'slug' => 'professional-engineering-technical',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            29 => 
            array (
                'id' => 33,
                'uuid' => '5b51b51f-2fa8-441d-9225-1beaeb437802',
                'name' => 'Psychology',
                'slug' => 'psychology',
                'created_at' => '2021-12-04 22:22:04',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            30 => 
            array (
                'id' => 34,
                'uuid' => '95614131-2401-4d93-9e78-0f46f185ef37',
                'name' => 'Reference & Dictionary',
                'slug' => 'reference-dictionary',
                'created_at' => '2021-12-04 22:22:05',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            31 => 
            array (
                'id' => 35,
                'uuid' => '201ad7ae-6c91-4272-81cf-1bdfaf81bd38',
                'name' => 'Religion & Spirituality',
                'slug' => 'religion-spirituality',
                'created_at' => '2021-12-04 22:22:05',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            32 => 
            array (
                'id' => 36,
                'uuid' => '61c8a398-1334-4981-bf61-46218385da9d',
                'name' => 'Romance',
                'slug' => 'romance',
                'created_at' => '2021-12-04 22:22:05',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            33 => 
            array (
                'id' => 37,
                'uuid' => '88ea7fa8-25c5-4ce8-aa16-d7b7ef298c4a',
                'name' => 'Science Fiction & Fantasy',
                'slug' => 'science-fiction-fantasy',
                'created_at' => '2021-12-04 22:22:05',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            34 => 
            array (
                'id' => 38,
                'uuid' => 'dc3cf946-9065-4658-9d0c-ee088cafc6b3',
                'name' => 'Science & Nature',
                'slug' => 'science-nature',
                'created_at' => '2021-12-04 22:22:05',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            35 => 
            array (
                'id' => 39,
                'uuid' => '647ab0e4-e4d7-4fdf-b79a-45794f6001b7',
                'name' => 'Sports & Outdoors',
                'slug' => 'sports-outdoors',
                'created_at' => '2021-12-04 22:22:05',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            36 => 
            array (
                'id' => 40,
                'uuid' => '4d55012f-25fe-4e28-aa4f-9b47de1213cc',
                'name' => 'Teen & Young Adult Fiction',
                'slug' => 'teen-young-adult-fiction',
                'created_at' => '2021-12-04 22:22:05',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            37 => 
            array (
                'id' => 41,
                'uuid' => '4b5039ab-7a03-4e99-bf35-aa0c673be495',
                'name' => 'Travel',
                'slug' => 'travel',
                'created_at' => '2021-12-04 22:22:05',
                'updated_at' => '2021-12-25 22:47:30',
            ),
            38 => 
            array (
                'id' => 43,
                'uuid' => '87ee5e51-e0a8-492a-a9ce-0928531cf7db',
                'name' => 'Lainnya',
                'slug' => 'lainnya',
                'created_at' => '2021-12-04 22:25:10',
                'updated_at' => '2021-12-25 22:47:30',
            ),
        ));
        
        
    }
}