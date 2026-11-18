<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Berita::factory()->count(2)->create();

       $this->call([
            MahasiswaSeeder::class,
        ]);
    }
}
