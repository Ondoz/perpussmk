<?php

namespace App\Console\Commands;

use App\Models\Peminjaman;
use App\Models\Product;
use Faker\Factory;
use Illuminate\Console\Command;

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
                'user_id' => $faker->unique()->numberBetween(1,11),
                'is_status'=> 'padding'
            ]);
            for ($a = 0; $a < 3; $a++) {
                $peminjaman->peminjamanitem()->create([
                    'peminjaman_id' => $faker->unique()->numberBetween(1,5),
                    'buku_id' => $faker->unique()->numberBetween(1,10),
                    'is_status' => 'false'
                ]);
            }
            $this->info($peminjaman->user->name);
        }
        // return Command::SUCCESS;
    }
}
