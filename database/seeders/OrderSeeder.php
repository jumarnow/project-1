<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = new Order();
        $data->order_code = 'ORD0001';
        $data->order_date = '2023-03-03';
        $data->product_id = 1;
        $data->user_id = 1;
        $data->save();
    }
}
