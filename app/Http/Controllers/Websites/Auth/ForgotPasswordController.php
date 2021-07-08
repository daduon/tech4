<?php

namespace App\Http\Controllers\Websites\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */
    public function showLinkRequestForm()
    {
        return view('websites.auth.passwords.email');
    }
    public function broker()
    {
        return Password::broker();
    }

    public function guard(){
        return Auth::guard('admin');
    }
    // use SendsPasswordResetEmails;
}
