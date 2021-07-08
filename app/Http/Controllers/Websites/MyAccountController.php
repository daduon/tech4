<?php

namespace App\Http\Controllers\Websites;

use App\Http\Controllers\Controller;
use App\Http\Requests\Website\MyAccountRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MyAccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:student');
    }

    public function show(){
        $student = auth()->guard('student')->user();
        if (!$student->avatar) {
            $student->avatar =avatar($student->name);
        }
        $student->save();
        return view('websites.my-account.index')->with([
            'account'=>$student
        ]);
    }
    public function update(MyAccountRequest $request){
        $student = auth()->guard('student')->user();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->organization = $request->organization;
        $student->position = $request->position;

        if ($request->password) {
            $student->password = Hash::make($request->password);
        }
        $student->save();
        toast('success','Your account have been updated successfully');
        return redirect()->back();
    }
}
