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
                'stock_no' => 'STK001', 'item_code' => 'IC001', 'item_name' => 'Samsung TV', 'quantity' => 10, 'location' => 'Warehouse A', 'store_name' => 'ElectroWorld', 'in_stock_date' => '2024-08-01'
            ],
            [
                'stock_no' => 'STK002', 'item_code' => 'IC002', 'item_name' => 'Sony Soundbar', 'quantity' => 8, 'location' => 'Warehouse B', 'store_name' => 'SoundMaster', 'in_stock_date' => '2024-08-02'
            ],
            [
                'stock_no' => 'STK003', 'item_code' => 'IC003', 'item_name' => 'LG Refrigerator', 'quantity' => 15, 'location' => 'Warehouse C', 'store_name' => 'CoolZone', 'in_stock_date' => '2024-08-03'
            ],
            [
                'stock_no' => 'STK004', 'item_code' => 'IC004', 'item_name' => 'Whirlpool Washing Machine', 'quantity' => 5, 'location' => 'Warehouse D', 'store_name' => 'CleanPro', 'in_stock_date' => '2024-08-04'
            ],
            [
                'stock_no' => 'STK005', 'item_code' => 'IC005', 'item_name' => 'Panasonic Microwave', 'quantity' => 12, 'location' => 'Warehouse E', 'store_name' => 'HeatWave', 'in_stock_date' => '2024-08-05'
            ],
            [
                'stock_no' => 'STK006', 'item_code' => 'IC006', 'item_name' => 'HP Laptop', 'quantity' => 20, 'location' => 'Warehouse F', 'store_name' => 'TechHub', 'in_stock_date' => '2024-08-06'
            ],
            [
                'stock_no' => 'STK007', 'item_code' => 'IC007', 'item_name' => 'Dell Monitor', 'quantity' => 25, 'location' => 'Warehouse G', 'store_name' => 'VisualTech', 'in_stock_date' => '2024-08-07'
            ],
            [
                'stock_no' => 'STK008', 'item_code' => 'IC008', 'item_name' => 'Apple iPhone 14', 'quantity' => 30, 'location' => 'Warehouse H', 'store_name' => 'iStore', 'in_stock_date' => '2024-08-08'
            ],
            [
                'stock_no' => 'STK009', 'item_code' => 'IC009', 'item_name' => 'Samsung Galaxy S23', 'quantity' => 18, 'location' => 'Warehouse I', 'store_name' => 'MobileMart', 'in_stock_date' => '2024-08-09'
            ],
            [
                'stock_no' => 'STK010', 'item_code' => 'IC010', 'item_name' => 'OnePlus Nord 2', 'quantity' => 22, 'location' => 'Warehouse J', 'store_name' => 'PhoneWorld', 'in_stock_date' => '2024-08-10'
            ],
            [
                'stock_no' => 'STK011', 'item_code' => 'IC011', 'item_name' => 'Canon DSLR', 'quantity' => 7, 'location' => 'Warehouse K', 'store_name' => 'PhotoKing', 'in_stock_date' => '2024-08-11'
            ],
            [
                'stock_no' => 'STK012', 'item_code' => 'IC012', 'item_name' => 'Nikon Lens', 'quantity' => 14, 'location' => 'Warehouse L', 'store_name' => 'LensHouse', 'in_stock_date' => '2024-08-12'
            ],
            [
                'stock_no' => 'STK013', 'item_code' => 'IC013', 'item_name' => 'Lenovo ThinkPad', 'quantity' => 11, 'location' => 'Warehouse M', 'store_name' => 'TechGiant', 'in_stock_date' => '2024-08-13'
            ],
            [
                'stock_no' => 'STK014', 'item_code' => 'IC014', 'item_name' => 'Asus ROG Laptop', 'quantity' => 9, 'location' => 'Warehouse N', 'store_name' => 'GameZone', 'in_stock_date' => '2024-08-14'
            ],
            [
                'stock_no' => 'STK015', 'item_code' => 'IC015', 'item_name' => 'MSI Gaming Monitor', 'quantity' => 17, 'location' => 'Warehouse O', 'store_name' => 'PixelView', 'in_stock_date' => '2024-08-15'
            ],
            [
                'stock_no' => 'STK016', 'item_code' => 'IC016', 'item_name' => 'TP-Link Router', 'quantity' => 40, 'location' => 'Warehouse P', 'store_name' => 'NetWorld', 'in_stock_date' => '2024-08-16'
            ],
            [
                'stock_no' => 'STK017', 'item_code' => 'IC017', 'item_name' => 'Netgear Switch', 'quantity' => 13, 'location' => 'Warehouse Q', 'store_name' => 'SwitchTech', 'in_stock_date' => '2024-08-17'
            ],
            [
                'stock_no' => 'STK018', 'item_code' => 'IC018', 'item_name' => 'Sony Headphones', 'quantity' => 35, 'location' => 'Warehouse R', 'store_name' => 'AudioZone', 'in_stock_date' => '2024-08-18'
            ],
            [
                'stock_no' => 'STK019', 'item_code' => 'IC019', 'item_name' => 'Bose Sound System', 'quantity' => 5, 'location' => 'Warehouse S', 'store_name' => 'BassBlast', 'in_stock_date' => '2024-08-19'
            ],
            [
                'stock_no' => 'STK020', 'item_code' => 'IC020', 'item_name' => 'JBL Bluetooth Speaker', 'quantity' => 28, 'location' => 'Warehouse T', 'store_name' => 'SoundScape', 'in_stock_date' => '2024-08-20'
            ],
        ]);
    }
}
