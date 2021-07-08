<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $term = $request->q;
            $term = trim($term);

            $perPage = 20;
            $page = $request->page;

            $customers = Customer::select(['id','name as text'])->where(function ($q) use ($term) {
                if ($term) {
                    $q->where('name', 'LIKE', '%' .$term. '%');
                    $q->OrWhere('phone', 'LIKE', '%' .$term. '%');
                }
            })->notDelete()->active();

            $customers = $customers->paginate($perPage,['*'],'page',$page);
            $count = $customers->total();

            $endCount = (($page - 1) * $perPage) + $perPage;
            $morePages = $count > $endCount;

            $results = [
                "results" => $customers->items(),
                "pagination" => [
                    "more" => $morePages
                ]
            ];

            return response()->json($results);
        }
    }

    public function store(Request $request)
    {
        $customer = Customer::create([
            'branch_id' => Auth::user()->branch_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'dob' => $request->dob ? date('Y-m-d',strtotime($request->dob)) : null,
            'address' => $request->address,
            'description' => $request->description
        ]);

        return response()->json($customer);
    }
}
