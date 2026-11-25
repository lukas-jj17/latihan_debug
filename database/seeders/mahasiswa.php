<?php

namespace Database\Seeders;

use App\Models\Mahasiswa as ModelsMahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsMahasiswa::firstOrCreate([
            'NIM' => '0001',
        ], [
            'name' => 'Saya',
            'jurusan' => 'Sistem dan Teknologi Informasi'
        ]);

        ModelsMahasiswa::firstOrCreate([
            'NIM' => '0002',
        ], [
            'name' => 'Kamu',
            'jurusan' => 'Sistem dan Teknologi Informasi'
        ]);

        ModelsMahasiswa::firstOrCreate([
            'NIM' => '0003',
        ], [
            'name' => 'Dia',
            'jurusan' => 'Sistem dan Teknologi Informasi'
        ]);
    }
}
