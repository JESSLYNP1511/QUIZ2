<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'kode_barang' => 'BR001',
                'nama_barang' => 'Kursi',
                'satuan' => 'pcs',
                'harga_jual' => 50000,
                'harga_beli' => 35000,
                'stok' => 20,
                'status' => 'Arrived',
            ],
            [
                'kode_barang' => 'BR002',
                'nama_barang' => 'Meja',
                'satuan' => 'pcs',
                'harga_jual' => 120000,
                'harga_beli' => 80000,
                'stok' => 15,
                'status' => 'Delivery',
            ],
            [
                'kode_barang' => 'BR003',
                'nama_barang' => 'Lemari',
                'satuan' => 'pcs',
                'harga_jual' => 300000,
                'harga_beli' => 250000,
                'stok' => 10,
                'status' => 'Arrived',
            ],
            [
                'kode_barang' => 'BR004',
                'nama_barang' => 'Kulkas',
                'satuan' => 'pcs',
                'harga_jual' => 2000000,
                'harga_beli' => 1800000,
                'stok' => 5,
                'status' => 'Arrived',
            ],
            [
                'kode_barang' => 'BR005',
                'nama_barang' => 'Kompor',
                'satuan' => 'pcs',
                'harga_jual' => 350000,
                'harga_beli' => 300000,
                'stok' => 8,
                'status' => 'Delivery',
            ],
            [
                'kode_barang' => 'BR006',
                'nama_barang' => 'Rak',
                'satuan' => 'pcs',
                'harga_jual' => 100000,
                'harga_beli' => 70000,
                'stok' => 25,
                'status' => 'Arrived',
            ],
            [
                'kode_barang' => 'BR007',
                'nama_barang' => 'Kasur',
                'satuan' => 'pcs',
                'harga_jual' => 500000,
                'harga_beli' => 450000,
                'stok' => 12,
                'status' => 'Arrived',
            ],
            [
                'kode_barang' => 'BR008',
                'nama_barang' => 'Keramik',
                'satuan' => 'lsn',
                'harga_jual' => 150000,
                'harga_beli' => 100000,
                'stok' => 30,
                'status' => 'Delivery',
            ],
            [
                'kode_barang' => 'BR009',
                'nama_barang' => 'Dispenser',
                'satuan' => 'pcs',
                'harga_jual' => 250000,
                'harga_beli' => 200000,
                'stok' => 18,
                'status' => 'Arrived',
            ],
            [
                'kode_barang' => 'BR010',
                'nama_barang' => 'Meja Rias',
                'satuan' => 'pcs',
                'harga_jual' => 450000,
                'harga_beli' => 400000,
                'stok' => 10,
                'status' => 'Delivery',
            ],
        ];

       
        DB::table('barangs')->insert($products);
    }
}