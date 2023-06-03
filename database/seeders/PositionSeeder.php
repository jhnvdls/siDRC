<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            'Ketua',
            'Wakil Ketua',
            'Sekretaris',
            'Bendahara',
            'Kepala Departemen',
            'Wakil Kepala Departemen',
            'Anggota',
        ];

        foreach ($positions as $position) {
            \App\Models\Position::create([
                'name' => $position,
            ]);
        }
    }
}
