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
        ]);

        $this->call([
            PostSeeder::class,
            EventSeeder::class,
            DepartementSeeder::class,
            PositionSeeder::class,

        ]);
    }
}