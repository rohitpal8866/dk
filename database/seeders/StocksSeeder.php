<?php

namespace Database\Seeders;

use App\Models\Stocks;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StocksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stocks::insert([
            [
                'stock_no' => '1', 'item_code' => 'IC001', 'item_name' => 'Samsung TV', 'quantity' => 10, 'location' => 'Warehouse A', 'store_name' => 'ElectroWorld', 'in_stock_date' => '2024-08-01'
            ],
            [
                'stock_no' => '2', 'item_code' => 'IC002', 'item_name' => 'Sony Soundbar', 'quantity' => 8, 'location' => 'Warehouse B', 'store_name' => 'SoundMaster', 'in_stock_date' => '2024-08-02'
            ],
            [
                'stock_no' => '3', 'item_code' => 'IC003', 'item_name' => 'LG Refrigerator', 'quantity' => 15, 'location' => 'Warehouse C', 'store_name' => 'CoolZone', 'in_stock_date' => '2024-08-03'
            ],
            [
                'stock_no' => '4', 'item_code' => 'IC004', 'item_name' => 'Whirlpool Washing Machine', 'quantity' => 5, 'location' => 'Warehouse D', 'store_name' => 'CleanPro', 'in_stock_date' => '2024-08-04'
            ],
            [
                'stock_no' => '5', 'item_code' => 'IC005', 'item_name' => 'Panasonic Microwave', 'quantity' => 12, 'location' => 'Warehouse E', 'store_name' => 'HeatWave', 'in_stock_date' => '2024-08-05'
            ],
            
        ]);
    }
}
