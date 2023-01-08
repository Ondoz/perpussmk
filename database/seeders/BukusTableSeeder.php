<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BukusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bukus')->delete();
        
        \DB::table('bukus')->insert(array (
            0 => 
            array (
                'code' => '80584353',
                'created_at' => '2023-01-08 09:57:09',
                'id' => 1,
                'judul' => 'Buku Panduan Guru Pendidikan Agama Islam dan Budi Pekerti untuk SMA/SMK Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Ahmad Taufik, Nurwastuti Setyowati',
                'slug' => 'buku-panduan-guru-pendidikan-agama-islam-dan-budi-pekerti-untuk-smasmk-kelas-x',
                'updated_at' => '2023-01-08 09:57:09',
                'uuid' => '8c50acba-c3b3-423d-99de-01b346b7ccba',
            ),
            1 => 
            array (
                'code' => '82002305',
                'created_at' => '2023-01-08 09:57:10',
                'id' => 2,
                'judul' => 'Pendidikan Agama Islam dan Budi Pekerti untuk SMA/SMK Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Ahmad Taufik, Nurwastuti Setyowati',
                'slug' => 'pendidikan-agama-islam-dan-budi-pekerti-untuk-smasmk-kelas-x',
                'updated_at' => '2023-01-08 09:57:10',
                'uuid' => 'a264acd1-a611-4667-ad40-78a60e86118a',
            ),
            2 => 
            array (
                'code' => '56675061',
                'created_at' => '2023-01-08 09:57:10',
                'id' => 3,
                'judul' => 'Buku Panduan Guru Bahasa dan Bersastra Indonesia untuk SMA/SMK Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Sefi Indra Gumilar, Fadillah Tri Aulia',
                'slug' => 'buku-panduan-guru-bahasa-dan-bersastra-indonesia-untuk-smasmk-kelas-x',
                'updated_at' => '2023-01-08 09:57:10',
                'uuid' => '8cdd4f7c-8f57-4c4e-ac14-acffb70ee772',
            ),
            3 => 
            array (
                'code' => '57624273',
                'created_at' => '2023-01-08 09:57:10',
                'id' => 4,
                'judul' => 'Bahasa dan Bersastra Indonesia untuk SMA/SMK Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Fadillah Tri Aulia, Sefi Indra Gumilar',
                'slug' => 'bahasa-dan-bersastra-indonesia-untuk-smasmk-kelas-x',
                'updated_at' => '2023-01-08 09:57:10',
                'uuid' => '8d606253-4331-405a-a158-a5e63a0558d8',
            ),
            4 => 
            array (
                'code' => '92758674',
                'created_at' => '2023-01-08 09:57:10',
                'id' => 5,
                'judul' => 'Buku Panduan Guru Ilmu Pengetahuan Alam untuk SMA Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Ayuk Ratna Puspaningsih, Elizabeth Tjahjadarmawan, Niken Resminingpuri Krisdianti',
                'slug' => 'buku-panduan-guru-ilmu-pengetahuan-alam-untuk-sma-kelas-x',
                'updated_at' => '2023-01-08 09:57:10',
                'uuid' => '2aaca772-c1ee-4226-8c41-a06e732b4e0b',
            ),
            5 => 
            array (
                'code' => '11758761',
                'created_at' => '2023-01-08 09:57:10',
                'id' => 6,
                'judul' => 'Ilmu Pengetahuan Alam untuk SMA Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Ayuk Ratna Puspaningsih, Elizabeth Tjahjadarmawan, Niken Resminingpuri Krisdianti',
                'slug' => 'ilmu-pengetahuan-alam-untuk-sma-kelas-x',
                'updated_at' => '2023-01-08 09:57:10',
                'uuid' => '8d17e584-b6bf-4557-b620-a641b12801aa',
            ),
            6 => 
            array (
                'code' => '03530412',
                'created_at' => '2023-01-08 09:57:11',
                'id' => 7,
                'judul' => 'Buku Panduan Guru Ilmu Pengetahuan Sosial untuk SMA Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Sari Oktafiana, Efvinggo Fasya Jaya. SP, M. Nursa’ban, Supardi, Mohammad Rizky Satria',
                'slug' => 'buku-panduan-guru-ilmu-pengetahuan-sosial-untuk-sma-kelas-x',
                'updated_at' => '2023-01-08 09:57:11',
                'uuid' => '6c654b88-9167-4e09-b990-bcc61406b687',
            ),
            7 => 
            array (
                'code' => '43650002',
                'created_at' => '2023-01-08 09:57:11',
                'id' => 8,
                'judul' => 'Ilmu Pengetahuan Sosial untuk SMA Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Sari Oktafiana, Efvinggo Fasya Jaya. SP, M. Nursa’ban, Supardi, Mohammad Rizky Satria',
                'slug' => 'ilmu-pengetahuan-sosial-untuk-sma-kelas-x',
                'updated_at' => '2023-01-08 09:57:11',
                'uuid' => '1aa4f9a7-63f3-4f3f-b908-1697975c3d82',
            ),
            8 => 
            array (
                'code' => '04130284',
                'created_at' => '2023-01-08 09:57:11',
                'id' => 9,
                'judul' => 'Buku Panduan Guru Informatika untuk SMA Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Wahyono, Mushthofa, Auzi Asfarian, Dean Apriana Ramadhan, Hanson Prihantoro Putro, Irya Wisnubhadra, Budiman Saputra, Heni Pratiwi',
                'slug' => 'buku-panduan-guru-informatika-untuk-sma-kelas-x',
                'updated_at' => '2023-01-08 09:57:11',
                'uuid' => 'bf373281-3e85-446e-a5fa-c85109cc8cfb',
            ),
            9 => 
            array (
                'code' => '43865345',
                'created_at' => '2023-01-08 09:57:12',
                'id' => 10,
                'judul' => 'Informatika untuk SMA Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Mushthofa, Wahyono, Auzi Asfarian, Dean Apriana Ramadhan, Hanson Prihantoro Putro, Irya Wisnubhadra, Budiman Saputra, Heni Pratiwi',
                'slug' => 'informatika-untuk-sma-kelas-x',
                'updated_at' => '2023-01-08 09:57:12',
                'uuid' => '5c30895a-401d-4db5-a52f-ff24302e7881',
            ),
            10 => 
            array (
                'code' => '56468465',
                'created_at' => '2023-01-08 09:57:12',
                'id' => 11,
                'judul' => 'Buku Panduan Guru Matematika untuk SMA/SMK Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Dicky Susanto, Theja Kurniawan, Savitri K. Sihombing, Eunice Salim, Marianna Magdalena Radjawane, Ummy Salmah, Ambarsari Kusuma Wardani',
                'slug' => 'buku-panduan-guru-matematika-untuk-smasmk-kelas-x',
                'updated_at' => '2023-01-08 09:57:12',
                'uuid' => '125abfcb-4333-4e94-b0db-db9a1ef057fc',
            ),
            11 => 
            array (
                'code' => '08484765',
                'created_at' => '2023-01-08 09:57:12',
                'id' => 12,
                'judul' => 'Matematika untuk SMA/SMK Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Dicky Susanto, Theja Kurniawan, Savitri K. Sihombing, Eunice Salim, Marianna Magdalena Radjawane, Ummy Salmah, Ambarsari Kusuma Wardani',
                'slug' => 'matematika-untuk-smasmk-kelas-x',
                'updated_at' => '2023-01-08 09:57:12',
                'uuid' => 'b3358722-14e0-4593-86da-0b1a528fb709',
            ),
            12 => 
            array (
                'code' => '93299190',
                'created_at' => '2023-01-08 09:57:12',
                'id' => 13,
                'judul' => 'Buku Panduan Guru Pendidikan Jasmani, Olahraga dan Kesehatan untuk SMA/SMK Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Agus Mahendra, Bambang Abdul Jabar',
                'slug' => 'buku-panduan-guru-pendidikan-jasmani-olahraga-dan-kesehatan-untuk-smasmk-kelas-x',
                'updated_at' => '2023-01-08 09:57:12',
                'uuid' => '5e3a1ecc-6595-4bcc-970f-d5ed2479af76',
            ),
            13 => 
            array (
                'code' => '35693314',
                'created_at' => '2023-01-08 09:57:12',
                'id' => 14,
                'judul' => 'Buku Panduan Guru Pendidikan Pancasila dan Kewarganegaraan untuk SMA/SMK Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Hatim Gazali, Abdul Waidl, Tedi Kholiluddin, Ali Usman, Ahmad Asroni',
                'slug' => 'buku-panduan-guru-pendidikan-pancasila-dan-kewarganegaraan-untuk-smasmk-kelas-x',
                'updated_at' => '2023-01-08 09:57:12',
                'uuid' => '570edab5-aa9e-4017-aec4-6792ea2e9352',
            ),
            14 => 
            array (
                'code' => '81003143',
                'created_at' => '2023-01-08 09:57:13',
                'id' => 15,
                'judul' => 'Pendidikan Pancasila dan Kewarganegaraan untuk SMA/SMK Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Abdul Waidl, Ali Usman, Ahmad Asroni, Hatim Gazali, Tedi Kholiluddin',
                'slug' => 'pendidikan-pancasila-dan-kewarganegaraan-untuk-smasmk-kelas-x',
                'updated_at' => '2023-01-08 09:57:13',
                'uuid' => '67d5fe84-83f0-49e0-9f82-fa73934950bf',
            ),
            15 => 
            array (
                'code' => '89815137',
                'created_at' => '2023-01-08 09:57:13',
                'id' => 16,
                'judul' => 'Buku Panduan Guru Seni Musik untuk SMA/SMK Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Henry Pranoto, Christy Rahma Septiani',
                'slug' => 'buku-panduan-guru-seni-musik-untuk-smasmk-kelas-x',
                'updated_at' => '2023-01-08 09:57:13',
                'uuid' => '844fcb0a-ecd4-448b-bb83-5a2d1f0d0e5f',
            ),
            16 => 
            array (
                'code' => '94751734',
                'created_at' => '2023-01-08 09:57:13',
                'id' => 17,
                'judul' => 'Buku Panduan Guru Seni Rupa untuk SMA/SMK Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Monika Irayati, Saraswati Dewi',
                'slug' => 'buku-panduan-guru-seni-rupa-untuk-smasmk-kelas-x',
                'updated_at' => '2023-01-08 09:57:13',
                'uuid' => '84d8e8e6-5698-4ada-88af-60bb120c143f',
            ),
            17 => 
            array (
                'code' => '81555802',
                'created_at' => '2023-01-08 09:57:13',
                'id' => 18,
                'judul' => 'Buku Panduan Guru Seni Tari untuk SMA/SMK Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Hani Amalia Hendrajatin, Ratna Aryani',
                'slug' => 'buku-panduan-guru-seni-tari-untuk-smasmk-kelas-x',
                'updated_at' => '2023-01-08 09:57:13',
                'uuid' => 'ec9c4906-c84b-402f-a9e1-38fe12522304',
            ),
            18 => 
            array (
                'code' => '22868176',
                'created_at' => '2023-01-08 09:57:13',
                'id' => 19,
                'judul' => 'Buku Panduan Guru Seni Teater untuk SMA/SMK Kelas X',
                'kategori_id' => 1,
                'penulis' => 'E. Sumadiningrat, Sobar Budiman',
                'slug' => 'buku-panduan-guru-seni-teater-untuk-smasmk-kelas-x',
                'updated_at' => '2023-01-08 09:57:13',
                'uuid' => '1c988ced-a0aa-4249-9264-e187620de479',
            ),
            19 => 
            array (
                'code' => '81609154',
                'created_at' => '2023-01-08 09:57:14',
                'id' => 20,
                'judul' => 'Buku Panduan Guru Cerdas Cergas Berbahasa dan Bersastra Indonesia untuk SMA/SMK Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Heny Marwati, K. Waskitaningtyas',
                'slug' => 'buku-panduan-guru-cerdas-cergas-berbahasa-dan-bersastra-indonesia-untuk-smasmk-kelas-xi',
                'updated_at' => '2023-01-08 09:57:14',
                'uuid' => '4a520183-138d-45de-9fc7-7f0b35da53b4',
            ),
            20 => 
            array (
                'code' => '85678743',
                'created_at' => '2023-01-08 09:57:14',
                'id' => 21,
                'judul' => 'Cerdas Cergas Berbahasa dan Bersastra Indonesia untuk SMA/SMK Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Heny Marwati, K. Waskitaningtyas',
                'slug' => 'cerdas-cergas-berbahasa-dan-bersastra-indonesia-untuk-smasmk-kelas-xi',
                'updated_at' => '2023-01-08 09:57:14',
                'uuid' => '78974e67-e3d4-4763-ae52-70eb9b3e139e',
            ),
            21 => 
            array (
                'code' => '66749622',
                'created_at' => '2023-01-08 09:57:14',
                'id' => 22,
                'judul' => 'Buku Panduan Guru Bahasa Indonesia Tingkat Lanjut Cakap Berbahasa dan Bersastra Indonesia untuk SMA Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Maman, Rahmah Purwahida',
                'slug' => 'buku-panduan-guru-bahasa-indonesia-tingkat-lanjut-cakap-berbahasa-dan-bersastra-indonesia-untuk-sma-kelas-xi',
                'updated_at' => '2023-01-08 09:57:14',
                'uuid' => '3f7d2c03-342b-47a0-9d63-abb4f3c1ea47',
            ),
            22 => 
            array (
                'code' => '40658520',
                'created_at' => '2023-01-08 09:57:15',
                'id' => 23,
                'judul' => 'Bahasa Indonesia Tingkat Lanjut Cakap Berbahasa dan Bersastra Indonesia untuk SMA Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Rahmah Purwahida, Maman',
                'slug' => 'bahasa-indonesia-tingkat-lanjut-cakap-berbahasa-dan-bersastra-indonesia-untuk-sma-kelas-xi',
                'updated_at' => '2023-01-08 09:57:15',
                'uuid' => '8d75cd45-84e1-46bf-bf97-b9aa677976ac',
            ),
            23 => 
            array (
                'code' => '40743714',
                'created_at' => '2023-01-08 09:57:15',
                'id' => 24,
                'judul' => 'Buku Panduan Guru Bahasa Inggris Tingkat Lanjut untuk SMA Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Anik Muslikah Indriastuti',
                'slug' => 'buku-panduan-guru-bahasa-inggris-tingkat-lanjut-untuk-sma-kelas-xi',
                'updated_at' => '2023-01-08 09:57:15',
                'uuid' => '79950b78-fa7c-414a-80f5-6eff36ecdd53',
            ),
            24 => 
            array (
                'code' => '75636289',
                'created_at' => '2023-01-08 09:57:16',
                'id' => 25,
                'judul' => 'Bahasa Inggris Tingkat Lanjut untuk SMA Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Rida Afrilyasanti',
                'slug' => 'bahasa-inggris-tingkat-lanjut-untuk-sma-kelas-xi',
                'updated_at' => '2023-01-08 09:57:16',
                'uuid' => '1d7d04f9-a93c-43bc-aa92-af9afac0a64c',
            ),
            25 => 
            array (
                'code' => '25244618',
                'created_at' => '2023-01-08 09:57:16',
                'id' => 26,
                'judul' => 'Buku Panduan Guru Matematika Tingkat Lanjut untuk SMA Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Al Azhary Masta, Yosep Dwi Kristanto, Elyda Yulfiana, Muhammad Taqiyuddin',
                'slug' => 'buku-panduan-guru-matematika-tingkat-lanjut-untuk-sma-kelas-xi',
                'updated_at' => '2023-01-08 09:57:16',
                'uuid' => '44f399ed-c192-43a5-96c5-7a0b4f76b1b7',
            ),
            26 => 
            array (
                'code' => '05954162',
                'created_at' => '2023-01-08 09:57:16',
                'id' => 27,
                'judul' => 'Matematika Tingkat Lanjut untuk SMA Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Al Azhary Masta, Yosep Dwi Kristanto, Elyda Yulfiana, Muhammad Taqiyuddin',
                'slug' => 'matematika-tingkat-lanjut-untuk-sma-kelas-xi',
                'updated_at' => '2023-01-08 09:57:16',
                'uuid' => '88ff22fc-e98a-4676-bd50-9cdcb4695797',
            ),
            27 => 
            array (
                'code' => '61263840',
                'created_at' => '2023-01-08 09:57:16',
                'id' => 28,
                'judul' => 'Buku Panduan Guru Matematika untuk SMA/SMK Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Dicky Susanto, Savitri K. Sihombing, Marianna Magdalena Radjawane, Yulian Candra, Daniel Sinambela',
                'slug' => 'buku-panduan-guru-matematika-untuk-smasmk-kelas-xi',
                'updated_at' => '2023-01-08 09:57:16',
                'uuid' => '1a360aa2-9cf2-4e70-8f85-59da12c0a82d',
            ),
            28 => 
            array (
                'code' => '02207551',
                'created_at' => '2023-01-08 09:57:17',
                'id' => 29,
                'judul' => 'Matematika untuk SMA/SMK Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Dicky Susanto, Savitri K. Sihombing, Marianna Magdalena Radjawane, Yulian Candra, Daniel Sinambela',
                'slug' => 'matematika-untuk-smasmk-kelas-xi',
                'updated_at' => '2023-01-08 09:57:17',
                'uuid' => 'a673ffc3-c420-446b-98be-03330197743a',
            ),
            29 => 
            array (
                'code' => '70087192',
                'created_at' => '2023-01-08 09:57:17',
                'id' => 30,
                'judul' => 'Buku Panduan Guru Antropologi untuk SMA Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Antonius Rahardityo Adiputra',
                'slug' => 'buku-panduan-guru-antropologi-untuk-sma-kelas-xi',
                'updated_at' => '2023-01-08 09:57:17',
                'uuid' => '394bb4e1-630b-4e62-8ec1-9ce014ff0b87',
            ),
            30 => 
            array (
                'code' => '95770307',
                'created_at' => '2023-01-08 09:57:17',
                'id' => 31,
                'judul' => 'Antropologi untuk SMA Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Okta Hadi Nurcahyono',
                'slug' => 'antropologi-untuk-sma-kelas-xi',
                'updated_at' => '2023-01-08 09:57:17',
                'uuid' => 'df3750d5-7289-4783-9412-7d0c10f87cfc',
            ),
            31 => 
            array (
                'code' => '21294440',
                'created_at' => '2023-01-08 09:57:18',
                'id' => 32,
                'judul' => 'Buku Panduan Guru Ekonomi untuk SMA Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Aisyah Nurjanah, Yeni Fitriani',
                'slug' => 'buku-panduan-guru-ekonomi-untuk-sma-kelas-xi',
                'updated_at' => '2023-01-08 09:57:18',
                'uuid' => '0511afb3-a077-445c-bdc2-9e97470c72f0',
            ),
            32 => 
            array (
                'code' => '96136676',
                'created_at' => '2023-01-08 09:57:18',
                'id' => 33,
                'judul' => 'Ekonomi untuk SMA Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Yeni Fitriani, Aisyah Nurjanah',
                'slug' => 'ekonomi-untuk-sma-kelas-xi',
                'updated_at' => '2023-01-08 09:57:18',
                'uuid' => '47d0ae46-d8b5-4e8c-bdb5-a33d321fafeb',
            ),
            33 => 
            array (
                'code' => '68593216',
                'created_at' => '2023-01-08 09:57:18',
                'id' => 34,
                'judul' => 'Buku Panduan Guru Informatika untuk SMA Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Paulina H. Prima Rosa, Auzi Asfarian, Irya Wisnubhadra, Mushthofa, Dean Apriana Ramadhan',
                'slug' => 'buku-panduan-guru-informatika-untuk-sma-kelas-xi',
                'updated_at' => '2023-01-08 09:57:18',
                'uuid' => '373d9012-6eb0-4d7b-b7b9-bf4f53835622',
            ),
            34 => 
            array (
                'code' => '69763335',
                'created_at' => '2023-01-08 09:57:19',
                'id' => 35,
                'judul' => 'Informatika untuk SMA Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Auzi Asfarian, Paulina H. Prima Rosa, Irya Wisnubhadra, Mushtofa, Dean Apriana Ramadhan',
                'slug' => 'informatika-untuk-sma-kelas-xi',
                'updated_at' => '2023-01-08 09:57:19',
                'uuid' => '308e24ce-cff7-43af-993f-dfa016dee5d0',
            ),
            35 => 
            array (
                'code' => '52641879',
                'created_at' => '2023-01-08 09:57:19',
                'id' => 36,
                'judul' => 'Buku Panduan Guru Geografi untuk SMA Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Nisa Maulia',
                'slug' => 'buku-panduan-guru-geografi-untuk-sma-kelas-xi',
                'updated_at' => '2023-01-08 09:57:19',
                'uuid' => 'f82f36c0-8058-4550-a013-8dd5bf018ac9',
            ),
            36 => 
            array (
                'code' => '46170200',
                'created_at' => '2023-01-08 09:57:19',
                'id' => 37,
                'judul' => 'Geografi untuk SMA Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Budi Handoyo',
                'slug' => 'geografi-untuk-sma-kelas-xi',
                'updated_at' => '2023-01-08 09:57:19',
                'uuid' => '2992e165-5171-4519-8e7c-19360ad01e19',
            ),
            37 => 
            array (
                'code' => '42935124',
                'created_at' => '2023-01-08 09:57:20',
                'id' => 38,
                'judul' => 'Buku Panduan Guru Pendidikan Pancasila dan Kewarganegaraan untuk SMA/SMK Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Hatim Gazali, Tedi Kholiludin, Ali Usman, Ahmad Asroni, Abdul Waidl',
                'slug' => 'buku-panduan-guru-pendidikan-pancasila-dan-kewarganegaraan-untuk-smasmk-kelas-xi',
                'updated_at' => '2023-01-08 09:57:20',
                'uuid' => '906a0bdb-eee6-493f-a1e9-839b93acdbb2',
            ),
            38 => 
            array (
                'code' => '85368637',
                'created_at' => '2023-01-08 09:57:20',
                'id' => 39,
                'judul' => 'Pendidikan Pancasila dan Kewarganegaraan untuk SMA/SMK Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Tedi Kholiludin, Ahmad Asroni, Hatim Gazali, Abdul Waidl, Ali Usman',
                'slug' => 'pendidikan-pancasila-dan-kewarganegaraan-untuk-smasmk-kelas-xi',
                'updated_at' => '2023-01-08 09:57:20',
                'uuid' => 'fe9c2390-a8ad-4318-87dc-a3f7476609d0',
            ),
            39 => 
            array (
                'code' => '39851192',
                'created_at' => '2023-01-08 09:57:20',
                'id' => 40,
                'judul' => 'Buku Panduan Guru Sosiologi untuk SMA Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Seli Septiana Pratiwi, Joan Hesti Gita Purwasih',
                'slug' => 'buku-panduan-guru-sosiologi-untuk-sma-kelas-xi',
                'updated_at' => '2023-01-08 09:57:20',
                'uuid' => '03ec09da-5f1e-4d71-afe4-42bb328a20ee',
            ),
            40 => 
            array (
                'code' => '58338223',
                'created_at' => '2023-01-08 09:57:20',
                'id' => 41,
                'judul' => 'Sosiologi untuk SMA Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Joan Hesti Gita Purwasih, Seli Septiana Pratiwi',
                'slug' => 'sosiologi-untuk-sma-kelas-xi',
                'updated_at' => '2023-01-08 09:57:20',
                'uuid' => '0c1ffe48-cd92-47a7-9950-b5a1caf3eb11',
            ),
            41 => 
            array (
                'code' => '60284525',
                'created_at' => '2023-01-08 09:57:21',
                'id' => 42,
                'judul' => 'Buku Panduan Guru Seni Musik: Kita dan Musik untuk SMA Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Turino, A.Budiyanto',
                'slug' => 'buku-panduan-guru-seni-musik:-kita-dan-musik-untuk-sma-kelas-xi',
                'updated_at' => '2023-01-08 09:57:21',
                'uuid' => '52ddd1e9-a8aa-43e3-bc5f-07bbc6809ba5',
            ),
            42 => 
            array (
                'code' => '45557590',
                'created_at' => '2023-01-08 09:57:21',
                'id' => 43,
                'judul' => 'Buku Panduan Guru Seni Rupa untuk SMA Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Bambang Subarnas, Lenny Djanurlia',
                'slug' => 'buku-panduan-guru-seni-rupa-untuk-sma-kelas-xi',
                'updated_at' => '2023-01-08 09:57:21',
                'uuid' => '57e55522-cf5c-4290-9562-ec5b549ed453',
            ),
            43 => 
            array (
                'code' => '80716181',
                'created_at' => '2023-01-08 09:57:21',
                'id' => 44,
                'judul' => 'Buku Panduan Guru Seni Tari untuk SMA Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Eny Kusumastuti,Milasari',
                'slug' => 'buku-panduan-guru-seni-tari-untuk-sma-kelas-xi',
                'updated_at' => '2023-01-08 09:57:21',
                'uuid' => 'd0277a58-5f61-439f-99f3-d6e014970f94',
            ),
            44 => 
            array (
                'code' => '67763788',
                'created_at' => '2023-01-08 09:57:21',
                'id' => 45,
                'judul' => 'Buku Panduan Guru Seni Teater untuk SMA Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Deden Haerudin, Tria Sismalinda',
                'slug' => 'buku-panduan-guru-seni-teater-untuk-sma-kelas-xi',
                'updated_at' => '2023-01-08 09:57:21',
                'uuid' => '14f967cd-c5b3-4366-8a05-49e04095d64c',
            ),
            45 => 
            array (
                'code' => '89077788',
                'created_at' => '2023-01-08 09:57:21',
                'id' => 46,
                'judul' => 'Buku Panduan Guru Pendidikan Agama Islam dan Budi Pekerti untuk SMA/SMK Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Abd. Rahman, Hery Nugroho',
                'slug' => 'buku-panduan-guru-pendidikan-agama-islam-dan-budi-pekerti-untuk-smasmk-kelas-xi',
                'updated_at' => '2023-01-08 09:57:21',
                'uuid' => '280a854d-b147-42ad-8423-c8ca45fb50b2',
            ),
            46 => 
            array (
                'code' => '50344390',
                'created_at' => '2023-01-08 09:57:22',
                'id' => 47,
                'judul' => 'Pendidikan Agama Islam dan Budi Pekerti untuk SMA/SMK Kelas XI',
                'kategori_id' => 2,
                'penulis' => 'Abd. Rahman, Hery Nugroho',
                'slug' => 'pendidikan-agama-islam-dan-budi-pekerti-untuk-smasmk-kelas-xi',
                'updated_at' => '2023-01-08 09:57:22',
                'uuid' => 'ff5603fe-f9ed-4d19-82f4-5d4e2b098353',
            ),
            47 => 
            array (
                'code' => '88495880',
                'created_at' => '2023-01-08 09:57:22',
                'id' => 48,
                'judul' => 'Buku Panduan Guru Prakarya dan Kewirausahaan: Kerajinan untuk SMA/MA Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Sri Suratinah Hadiyati Kamihadi, Dewi Sri Handayani Nuswantari, Ries Muhammad Effendy',
                'slug' => 'Buku-Panduan-Guru-Prakarya-dan-Kewirausahaan-Kerajinan-untuk-SMAMA-Kelas-X',
                'updated_at' => '2023-01-08 09:57:22',
                'uuid' => 'c0505b36-e59c-4c37-b760-6962b0834e26',
            ),
            48 => 
            array (
                'code' => '22504487',
                'created_at' => '2023-01-08 09:57:22',
                'id' => 49,
                'judul' => 'Buku Panduan Guru Prakarya dan Kewirausahaan: Rekayasa untuk SMA/MA Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Lissiana Nussifera, Indra Samsudin, Novi Nurhayati',
                'slug' => 'Buku-Panduan-Guru-Prakarya-dan-Kewirausahaan-Rekayasa-untuk-SMAMA-Kelas-X',
                'updated_at' => '2023-01-08 09:57:22',
                'uuid' => 'd08bfb45-787d-42de-87ed-fff528ce7f32',
            ),
            49 => 
            array (
                'code' => '70229325',
                'created_at' => '2023-01-08 09:57:22',
                'id' => 50,
                'judul' => 'Buku Panduan Guru Prakarya dan Kewirausahaan: Pengolahan untuk SMA/MA Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Yenti Rokhmulyenti, Suci Paresti,Rita Aisyatul Dalfah',
                'slug' => 'Buku-Panduan-Guru-Prakarya-dan-Kewirausahaan-Pengolahan-untuk-SMAMA-Kelas-X',
                'updated_at' => '2023-01-08 09:57:22',
                'uuid' => 'bde90d96-10f7-47d2-bbc2-cec2ad79c66b',
            ),
            50 => 
            array (
                'code' => '75305314',
                'created_at' => '2023-01-08 09:57:23',
                'id' => 51,
                'judul' => 'Bahasa Inggris: Work in Progress untuk SMA/SMK/MA Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Budi Hermawan, Dwi Haryanti, Nining Suryaningsih',
                'slug' => 'Bahasa-Inggris-Work-in-Progress-untuk-SMASMKMA-Kelas-X',
                'updated_at' => '2023-01-08 09:57:23',
                'uuid' => '1c484a56-3fc3-4375-b479-117542f34ce8',
            ),
            51 => 
            array (
                'code' => '61951242',
                'created_at' => '2023-01-08 09:57:23',
                'id' => 52,
                'judul' => 'Buku Panduan Guru Bahasa Inggris: Work in Progress untuk SMA/SMK/MA Kelas X',
                'kategori_id' => 1,
                'penulis' => 'Budi Hermawan, Dwi Haryanti, Nining Suryaningsih',
                'slug' => 'Buku-Panduan-Guru-Bahasa-Inggris-Work-in-Progress-untuk-SMASMKMA-Kelas-X',
                'updated_at' => '2023-01-08 09:57:23',
                'uuid' => '31058c98-4491-4dde-aa02-5012c262a40a',
            ),
            52 => 
            array (
                'code' => '96928905',
                'created_at' => '2023-01-08 09:57:23',
                'id' => 53,
                'judul' => 'Dasar-Dasar Seni Rupa untuk SMK/MAK Kelas X Semester 1',
                'kategori_id' => 1,
                'penulis' => 'Giriluhita Retno Cahyaningsih',
                'slug' => 'Dasar-Dasar-Seni-Rupa-untuk-SMKMAK-Kelas-X-Semester-1',
                'updated_at' => '2023-01-08 09:57:23',
                'uuid' => '4359fc77-1014-4444-be25-754d27627642',
            ),
            53 => 
            array (
                'code' => '21153884',
                'created_at' => '2023-01-08 09:57:23',
                'id' => 54,
                'judul' => 'Informatika untuk SMK/MAK Kelas X Semester 1',
                'kategori_id' => 1,
                'penulis' => 'Kusmadi, Imam Badrudin, Bima Laksana Putra, Wiyana Eva Cuntaka',
                'slug' => 'Informatika-untuk-SMKMAK-Kelas-X-Semester-1',
                'updated_at' => '2023-01-08 09:57:23',
                'uuid' => 'b35c5307-8bc6-4900-b74a-818ffeda9896',
            ),
        ));
        
        
    }
}