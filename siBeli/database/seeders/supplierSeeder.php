<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Faker::create();

        $suppliers = [];
        for ($i = 0; $i < 30; $i++) {
            $suppliers[] = [
                'kode_supplier' => 'SPL' . str_pad($i + 1, 3, '0', STR_PAD_LEFT),
                'nama_supplier' => $faker->company,
                'alamat' => $faker->address,
            ];
        }

        DB::table('suppliers')->insert($suppliers);
    }
}
