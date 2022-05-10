<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\UserDetails::factory(10)->create();
        // \App\Models\Kategori::factory(10)->create();
        // \App\Models\Buku::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(KategorisTableSeeder::class);
        $this->call(BukusTableSeeder::class);
        $this->call(DetailBukusTableSeeder::class);
        $this->call(MediaTableSeeder::class);

        // foreach (Buku::all() as $buku) {
        //     $kategori = Kategori::inRandomOrder()->take(rand(1, 3))->pluck('id');
        //     foreach ($kategori as $kat) {
        //         $buku->kategori()->attach($kat);
        //         $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        // }
        // }
    }
}
