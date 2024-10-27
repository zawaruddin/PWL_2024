<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'level_kode' => 'ADM',
                'level_nama' => 'Administrator',
                'level_alias' => 'Admin',
                'created_at' => now(),
            ],
            [
                'level_kode' => 'DSN',
                'level_nama' => 'Dosen',
                'level_alias' => 'Pengajar',
                'created_at' => now(),
            ],
            [
                'level_kode' => 'MHS',
                'level_nama' => 'Mahasiswa',
                'level_alias' => 'Pelajar',
                'created_at' => now(),
            ]
        ];
        
        DB::table('m_level')->insert($data);
    }
}
