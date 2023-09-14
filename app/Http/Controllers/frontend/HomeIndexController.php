<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\News;

class HomeIndexController extends Controller
{
    public function index()
    {
        $products = News::all();
        return view('frontend.index',[
            'products'=>$products
        ]);
    }
}
