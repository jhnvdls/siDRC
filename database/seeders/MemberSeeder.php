<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::create([
            'department_id' => 1,
            'position_id' => 1,
            'prodi_id' => 1,
            'name' => 'Jhon',
            'nim' => 'ifs19001',
            'email' => 'jhon@gmail',
            'phone' => '08123456789',
            'image' => 'java.png',
            'linkedin' => 'https://www.linkedin.com/in/',
            'instagram' => 'https://www.instagram.com/',
            'github' => 'https://github.com/',
        ]);
    }
}
