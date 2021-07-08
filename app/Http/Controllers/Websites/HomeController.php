<?php

namespace App\Http\Controllers\Websites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Slide;
use App\Models\WhyUs;
use App\Models\Mentor;
use App\Models\Testimonial;
use App\Models\Partner;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{

    public function index()
    {
       return view('websites.home.index')->with([
           'home' => Home::first(),
           'slides' => Slide::notDelete()->get(),
           'why_us' => WhyUs::notDelete()->get(),
           'mentors' => Mentor::notDelete()->get(),
           'testimonials' => Testimonial::notDelete()->get(),
           'partners' => Partner::notDelete()->get()
       ]);
   }
}
