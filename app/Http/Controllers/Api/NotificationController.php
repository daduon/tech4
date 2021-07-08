<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ImportStockDetail;
use App\Models\Medicine;

class NotificationController extends Controller
{
    public function index()
    {
        $medicines = Medicine::notDelete()->active()->whereRaw('qty <= reorder_level')->count();

        $importStocks = ImportStockDetail::where(function ($q){
            $q->where('expiry_date','<=',date('Y-m-d'));
            $q->where('dispose',0);
        })->count();

        return response()->json(['out_of_date' => $importStocks, 'out_of_stock' => $medicines]);
    }
}
