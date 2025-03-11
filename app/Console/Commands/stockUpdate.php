<?php

namespace App\Console\Commands;

use App\Models\Stocks;
use Carbon\Carbon;
use Illuminate\Console\Command;

class stockUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:stock-update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update stock to In-Stock';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Stocks::where('in_stock_date', Carbon::today())
        ->update(['status' => 'In Stock']);
    }
}
