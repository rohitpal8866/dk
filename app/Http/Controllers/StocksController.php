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
}
