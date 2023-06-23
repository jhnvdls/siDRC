<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            'Badan Pengurus Harian',
            'Departemen Kaderisasi',
            'Departemen Pendidikan dan Pelatihan',
        ];

        foreach ($departments as $department) {
            \App\Models\Department::create([
                'name' => $department,
            ]);
        }
    }
}
