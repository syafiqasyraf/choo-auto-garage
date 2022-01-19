<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Stok;
use App\Models\Order;
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
        \App\Models\User::factory(2)->create();

        \App\Models\Pelanggan::factory(10)->create();
        
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
        Stok::create([
            'item' => 'Minyak',
            'jenisitem' => 'general',
            'jenamakereta' => '',
            'jeniskereta' => '',
            'kuantiti' => 10,
            'hargabeli' => 60.00,
            'hargajual' => 99.00,
            'kedai' => 'shopee',
            'lokasibarang' => 'stor',
            'nota' => 'Tiada',
            'tarikhbeli' => Carbon::parse('2020-01-01'),
            'tarikhjual' => Carbon::parse('2020-01-17')
        ]);
        Order::create([
            'order' => 'Brake rosak',
            'kereta' => 'Perodua Myvi',
            'platkereta' => 'JSV 3291',
            'complain' => 'Brake depan rosak',
            'masalah' => 'Semua brake rosak',
            'tindakan' => 'Tukar brek baru',
            'catatan' => 'Next tukar belt',
            'status' => 1,
            'tarikhsiap' => Carbon::parse('2020-01-05'),
            'pelanggan_id' => 1,
        ]);
        Order::create([
            'order' => 'Servis',
            'kereta' => 'Proton Iriz',
            'platkereta' => 'WPL 9911',
            'complain' => 'Servis 10,000km',
            'masalah' => 'Minyak hitam',
            'tindakan' => 'Tukar minyak hitam',
            'catatan' => 'Next servis: 30,000km',
            'status' => 0,
            'tarikhsiap' => Carbon::parse(''),
            'pelanggan_id' => 2,
        ]);
    }
}
