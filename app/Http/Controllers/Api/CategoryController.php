<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $term = $request->q;
            $term = trim($term);

            $perPage = 20;
            $page = $request->page;

            $categories = Category::select(['id','name as text'])->where(function ($q) use ($term) {
                if ($term) {
                    $q->where('name', 'LIKE', '%' .$term. '%');
                }
            })->notDelete()->active();

            $categories = $categories->paginate($perPage,['*'],'page',$page);
            $count = $categories->total();

            $endCount = (($page - 1) * $perPage) + $perPage;
            $morePages = $count > $endCount;

            $results = [
                "results" => $categories->items(),
                "pagination" => [
                    "more" => $morePages
                ]
            ];

            return response()->json($results);
        }
    }
}
