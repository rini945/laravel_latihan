<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //tambahkan ini

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode' => 'B001',
                'nama' => 'Kipas Angin',
                'harga' => 150000.00,
                'stok' => 100,
            ],
            [
                'kode' => 'B002',
                'nama' => 'Televisi',
                'harga' => 2000000.00,
                'stok' => 50,
            ],
            [
                'kode' => 'B003',
                'nama' => 'kulkas',
                'harga' => 3000000.00,
                'stok' => 50,
            ],
            [
                'kode' => 'B004',
                'nama' => 'mesin cuci',
                'harga' => 4000000.00,
                'stok' => 50,
            ],
            [
                'kode' => 'B005',
                'nama' => 'speker',
                'harga' => 3000000.00,
                'stok' => 50,
            ],
        ]);
    }
}