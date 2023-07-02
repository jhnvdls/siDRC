<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodis = [
            'S1 Informatika',
            'S1 Sistem Informasi',
            'S1 Teknik Elektro',
            'D3 Teknik Komputer',
            'D3 Teknologi Informasi',
            'Sarjana Terapan Teknologi Rekayasa Perangkat Lunak',
        ];
        //make seeder
        foreach ($prodis as $prodi) {
            \App\Models\Prodi::create([
                'namaProdi' => $prodi,
            ]);
        }

    }
}
