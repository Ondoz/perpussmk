<?php

namespace App\Console\Commands;

use App\Models\Buku;
use App\Models\DetailBuku;
use App\Models\Kategori;
use App\Models\Peminjaman;
use App\Models\Product;
use Faker\Factory;
use Illuminate\Console\Command;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;

class PeminjamanTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'peminjaman:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This testing generate peminjaman';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        for ($i = 0; $i < 10; $i++) {
            $faker = Factory::create();
            $peminjaman = Peminjaman::create([
                'user_id' => $faker->unique()->numberBetween(1, 11),
                'is_status' => 'pending'
            ]);
            for ($a = 0; $a < 3; $a++) {
                $peminjaman->peminjamanitem()->create([
                    'buku_id' => $faker->unique()->numberBetween(27, 41),
                    'is_status' => 'false'
                ]);
            }
            $this->info($peminjaman->user->name);
        }
        return Command::SUCCESS;
    }
}
