<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\News;

class ServicesController extends Controller
{
    public function index()
    {
        $products = News::all();
        return view('frontend.layouts.services',[
            'products' => $products
        ]);
    }
}
