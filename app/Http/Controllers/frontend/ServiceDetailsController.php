<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class ServiceDetailsController extends Controller
{
    public function index($id)
    {

        $productDetails = \App\Models\News::where('id', $id)->get();
        $productDetail = \App\Models\News::where('id', $id)->first();
        return view('frontend.layouts.service-details',[
            'productDetails' => $productDetails,
            'productDetail' => $productDetail,
        ]);
    }

}
