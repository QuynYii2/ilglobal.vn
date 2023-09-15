<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class PricingController extends Controller
{
    public function index()
    {
        return view('frontend.layouts.pricing');
    }
}
