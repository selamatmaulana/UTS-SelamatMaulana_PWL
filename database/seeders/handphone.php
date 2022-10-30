<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class handphone extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('handphone')->insert([
            [
                'Merk' => 'iphone',
                'tipe' => '14',
                'Harga' => '26000000',
                'spesifikasi' => 'internal 12GB',
                'gambar' => 'kenanga.jpg'
            ],
            [
                'Merk' => 'samsung',
                'tipe' => 'S22',
                'Harga' => '22000000',
                'spesifikasi' => 'internal 12GB',
                'gambar' => 'rumah.jpg'
            ],
            [
                'Merk' => 'oppo',
                'tipe' => 'find X',
                'Harga' => '16000000',
                'spesifikasi' => 'internal 12GB',
                'gambar' => 'mamat.jpg'
            ],
            [
                'Merk' => 'xiaomi',
                'tipe' => '12',
                'Harga' => '22000000',
                'spesifikasi' => 'internal 12GB',
                'gambar' => 'xiaomi.jpg'
            ],
            [
                'Merk' => 'huawei',
                'tipe' => 'p50',
                'Harga' => '19000000',
                'spesifikasi' => 'internal 12GB',
                'gambar' => 'huawei.jpg'
            ]
        ]);
    }
}
