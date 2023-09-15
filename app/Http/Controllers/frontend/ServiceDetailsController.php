<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class ServiceDetailsController extends Controller
{
    public function index()
    {
        return view('frontend.layouts.service-details');
    }
}
