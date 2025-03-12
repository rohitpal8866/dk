<?php

namespace App\Http\Controllers;

use App\Models\Stocks;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StocksController extends Controller
{
    public function index()
    {
        $stocks = Stocks::all();
        return Inertia::render('Stock/Index', ['stocks' => $stocks]);
    }


    // Bluck Stocks
    public function bluckStocksindex()
    {
        $lastStock = Stocks::orderBy('stock_no', 'desc')->first()->stock_no;
        return Inertia::render('BluckStocks/Index', ['lastStock' => $lastStock]);
    }

    public function bluckStockssave(Request $request){
        $stocks = $request->stocks;

        foreach ($stocks as $stock) {
            Stocks::create($stock);
        }

        return redirect()->route('stocks.index');

    }
}
