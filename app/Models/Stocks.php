<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
    protected $fillable = [
       'stock_no', 'item_code', 'item_name', 'quantity', 'location', 'store_name', 'in_stock_date'
    ];
}
