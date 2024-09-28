<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class masukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $masuks = [
            [
                'kode_masuk' => 'MSK001',
                'tanggal_masuk' => '2024-09-27',
                'kode_admin' => 'AD001',
                'kode_supplier' => 'SL001',
                'total_masuk' => 150000,
            ],
            [
                'kode_masuk' => 'MSK002',
                'tanggal_masuk' => '2024-09-28',
                'kode_admin' => 'AD002',
                'kode_supplier' => 'SL002',
                'total_masuk' => 300000,
            ],
            [
                'kode_masuk' => 'MSK003',
                'tanggal_masuk' => '2024-09-29',
                'kode_admin' => 'AD003',
                'kode_supplier' => 'SL003',
                'total_masuk' => 450000,
            ],
        ];

        DB::table('masuks')->insert($masuks);
    }
}
