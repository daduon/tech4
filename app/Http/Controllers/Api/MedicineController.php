<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use App\Models\MedicineMeasurement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $branchId = $request->branch_id ? $request->branch_id : '';
            $term = $request->q;
            $term = trim($term);

            $perPage = 20;
            $page = $request->page;

            $medicines = Medicine::select(['id','name as text'])->where(function ($q) use ($term, $branchId) {
                if ($term) {
                    $q->where('name', 'LIKE', '%' .$term . '%');
                    $q->OrWhere('barcode', 'LIKE', '%' . $term . '%');
                }
                if ($branchId) {
                    $q->where('branch_id', $branchId);
                }
            })->notDelete()->active();

            $medicines = $medicines->paginate($perPage,'*','page',$page);
            $count = $medicines->total();

            $endCount = (($page - 1) * $perPage) + $perPage;
            $morePages = $count > $endCount;

            $results = [
                "results" => $medicines->items(),
                "pagination" => [
                    "more" => $morePages
                ]
            ];

            return response()->json($results);
        }
    }

    public function getMedicineData(Request $request)
    {
        $category = $request->category;
        $search = $request->search;
        $search = trim($search);

        $perPage = 12;
        $page = $request->page;

        $medicines = Medicine::with(['measurements','measurements.measurement','importMedicineDetails' => function($q){
            $q->where('qty','>',0);
        }])->where(function ($q) use ($search,$category) {
            if ($search) {
                $q->where('name', 'LIKE', '%' .$search . '%');
                $q->OrWhere('barcode', 'LIKE', '%' . $search . '%');
            }
            if ($category) {
                $q->where('category_id',$category);
            }

        })->notDelete()->active();

        $medicines = $medicines->paginate($perPage,['*'],'page',$page);
        $count = $medicines->total();

        $endCount = (($page - 1) * $perPage) + $perPage;
        $morePages = $count > $endCount;

        $results = [
            "results" => $medicines->items(),
            "pagination" => $morePages
        ];

        return response()->json($results);
    }

    public function getMedicine(Request $request)
    {
        $barcode = $request->barcode;

        $medicine = Medicine::with(['measurements' => function($q) {
            $q->select(['medicine_id','measurement_id','multiplier','price']);
        },'importMedicineDetails'])->where('barcode', $barcode)->notDelete()->active()->first();

        return response()->json($medicine);
    }

    public function getMedicineMeasurements(Request $request)
    {
        $measurements = MedicineMeasurement::with('measurement')->where('medicine_id',$request->medicine_id)->get();

        return response()->json($measurements);
    }
}
