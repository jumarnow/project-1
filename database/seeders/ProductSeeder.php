<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $motor_honda = array(
            array(
                'nama' => 'Supra GTR 150',
                'tahun' => 2021,
                'warna' => 'Merah Hitam',
                'harga' => 29100000
            ),
            array(
                'nama' => 'CB150R StreetFire',
                'tahun' => 2021,
                'warna' => 'Matte Black',
                'harga' => 32950000
            ),
            array(
                'nama' => 'ADV150',
                'tahun' => 2021,
                'warna' => 'Matte Black',
                'harga' => 34700000
            ),
            array(
                'nama' => 'Beat Street',
                'tahun' => 2021,
                'warna' => 'Pearl Nightfall Blue',
                'harga' => 18750000
            )
        );
        
        foreach($motor_honda as $data) {
            Product::create($data);
        }
        
    }
}
