<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_jenis_artikel')->insert([
            [
                'kode' => 'OR',
                'jenis' => 'OLAHRAGA'
            ],
            [
                'kode' => 'PL',
                'jenis' => 'POLITIK'
            ]
        ]);
        //
    }
}
