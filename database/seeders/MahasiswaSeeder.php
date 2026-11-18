<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MahasiswaSeeder extends Seeder
{
   
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'nama' => 'Dimas Panji',
                'nim' => '13242520015',
                'prodi' => 'Teknologi Informasi',
                'email' => 'dimas@example.com',
                'nohp' => '081230489723',
                'foto' => 'foto_dimas.jpg',
            ],
            [
                'nama' => 'Khiara Putri',
                'nim' => '13242520016',
                'prodi' => 'Teknologi Informasi',
                'email' => 'khiara@example.com',
                'nohp' => '08123456789',
                'foto' => 'foto_khiara.jpg',
            ],
        ]);
    }
}
