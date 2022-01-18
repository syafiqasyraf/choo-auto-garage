<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Stok;
use App\Models\Pelanggan;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Syafiq Asyraf',
            'username' => 'syafiqasyraf',
            'email' => 'syafiqasyraf00@gmail.com',
            'password' => bcrypt('password')
        ]);
        Stok::create([
            'item' => 'Break Pad',
            'jenisitem' => 'baru',
            'jenamakereta' => 'Proton',
            'jeniskereta' => 'Wira',
            'kuantiti' => 5,
            'hargabeli' => 10.00,
            'hargajual' => 15.00,
            'kedai' => 'shopee',
            'lokasibarang' => 'office',
            'nota' => 'Tiada',
            'tarikhbeli' => Carbon::parse('2020-01-01'),
            'tarikhjual' => Carbon::parse('2020-01-17')
        ]);

        \App\Models\User::factory(3)->create();

        \App\Models\Pelanggan::factory(10)->create();


    }
}
