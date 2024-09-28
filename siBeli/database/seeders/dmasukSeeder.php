<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dmasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dmasuks = [
            [
                'id_masuk' => 1,
                'kode_masuk' => 'MSK001',
                'kode_barang_beli' => 1,
                'jumlah' => 5,
                'subtotal' => 250000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 1,
                'kode_masuk' => 'MSK001',
                'kode_barang_beli' => 2,
                'jumlah' => 3,
                'subtotal' => 360000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 2,
                'kode_masuk' => 'MSK002',
                'kode_barang_beli' => 3,
                'jumlah' => 10,
                'subtotal' => 500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 2,
                'kode_masuk' => 'MSK002',
                'kode_barang_beli' => 4,
                'jumlah' => 7,
                'subtotal' => 420000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 3,
                'kode_masuk' => 'MSK003',
                'kode_barang_beli' => 5,
                'jumlah' => 8,
                'subtotal' => 960000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 3,
                'kode_masuk' => 'MSK003',
                'kode_barang_beli' => 6,
                'jumlah' => 6,
                'subtotal' => 1200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 4,
                'kode_masuk' => 'MSK004',
                'kode_barang_beli' => 1,
                'jumlah' => 4,
                'subtotal' => 200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 5,
                'kode_masuk' => 'MSK005',
                'kode_barang_beli' => 2,
                'jumlah' => 5,
                'subtotal' => 450000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 6,
                'kode_masuk' => 'MSK006',
                'kode_barang_beli' => 3,
                'jumlah' => 9,
                'subtotal' => 810000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 7,
                'kode_masuk' => 'MSK007',
                'kode_barang_beli' => 1,
                'jumlah' => 2,
                'subtotal' => 100000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 8,
                'kode_masuk' => 'MSK008',
                'kode_barang_beli' => 4,
                'jumlah' => 3,
                'subtotal' => 600000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 9,
                'kode_masuk' => 'MSK009',
                'kode_barang_beli' => 2,
                'jumlah' => 5,
                'subtotal' => 450000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 10,
                'kode_masuk' => 'MSK010',
                'kode_barang_beli' => 3,
                'jumlah' => 7,
                'subtotal' => 630000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 11,
                'kode_masuk' => 'MSK011',
                'kode_barang_beli' => 4,
                'jumlah' => 6,
                'subtotal' => 720000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 12,
                'kode_masuk' => 'MSK012',
                'kode_barang_beli' => 5,
                'jumlah' => 8,
                'subtotal' => 840000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 13,
                'kode_masuk' => 'MSK013',
                'kode_barang_beli' => 6,
                'jumlah' => 5,
                'subtotal' => 500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 14,
                'kode_masuk' => 'MSK014',
                'kode_barang_beli' => 1,
                'jumlah' => 9,
                'subtotal' => 270000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 15,
                'kode_masuk' => 'MSK015',
                'kode_barang_beli' => 2,
                'jumlah' => 10,
                'subtotal' => 500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 16,
                'kode_masuk' => 'MSK016',
                'kode_barang_beli' => 3,
                'jumlah' => 4,
                'subtotal' => 400000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 17,
                'kode_masuk' => 'MSK017',
                'kode_barang_beli' => 4,
                'jumlah' => 2,
                'subtotal' => 200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 18,
                'kode_masuk' => 'MSK018',
                'kode_barang_beli' => 5,
                'jumlah' => 3,
                'subtotal' => 600000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 19,
                'kode_masuk' => 'MSK019',
                'kode_barang_beli' => 6,
                'jumlah' => 7,
                'subtotal' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 20,
                'kode_masuk' => 'MSK020',
                'kode_barang_beli' => 1,
                'jumlah' => 6,
                'subtotal' => 600000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

    
        DB::table('dmasuks')->insert($dmasuks);
    }
}
