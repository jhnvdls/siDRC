<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@drc.com',
            'password' => Hash::make('password'),
        ]);

        Setting::create([
            'site_name' => 'Sistem Informasi Del Robotics Club',
            'site_logo' => 'logo.png',
            'site_favicon' => 'favicon.png',
            'site_email' => 'help@gmail.com',
            'visi_logo' => 'visi.png',
            'visi' => 'Menjadi manusia yang bisa berbakti dan membahagiakan orang tua dengan mendapatkan prestasi juara 1 di bidang keilmuan jurusan.',
            'misi_logo' => 'misi.png',
            'misi' => 'Belajar setiap hari bukan menggunakan prinsip kebut semalam. Selalu mengulang dan mempelajari materi yang disampaikan dosen. Konsultasi ke dosen pembimbing mengenai sistem belajar yang baik atau meminta saran ketika dalam kesulitan belajar. Aktif mencari informasi lomba yang ada di internet.',
        ]);

        $this->call([
            // PostSeeder::class,
            // EventSeeder::class,
            DepartmentSeeder::class,
            PositionSeeder::class,
            // MemberSeeder::class,
        ]);
    }
}
