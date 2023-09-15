<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function index()
    {
        return view('frontend.layouts.services');
    }
}
