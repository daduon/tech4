<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Benefit;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function benefit(){
        return view('parent.benefit')->with([
            'benefit' => Benefit::with('group')->where('group_id', 1)->get()
        ]);
    }
    public function update(Request $request , $id){
        $this->validation($request);
        $benefit = Benefit::find(base64_decode($id));
    }
}
