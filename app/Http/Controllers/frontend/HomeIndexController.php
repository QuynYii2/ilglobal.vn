<?php

namespace App\Http\Controllers\frontend;

use App\Enums\CategoryStatus;
use App\Enums\ConfigStatus;
use App\Enums\NewsStatus;
use App\Enums\PagesStatus;
use App\Enums\PartnerStatus;
use App\Http\Controllers\Controller;
use App\Models\Banners;
use App\Models\Category;
use App\Models\Configs;
use App\Models\News;
use App\Models\Pages;
use App\Models\Partner;
use Illuminate\Http\Request;

class HomeIndexController extends Controller
{
    public function index(Request $request)
    {
        $news = News::where('status', NewsStatus::ACTIVE)->get();
        $pages = Pages::where('status', PagesStatus::ACTIVE)->get();
        $cate = Category::where('status', CategoryStatus::ACTIVE)->get();
        $configs = Configs::where('status', ConfigStatus::ACTIVE)->first();
        $banners = Banners::all();
        $parents = Partner::where('status', PartnerStatus::ACTIVE)->orderBy('id', 'desc')->get();
        return view('frontend.index', compact('news', 'pages', 'configs', 'banners', 'cate', 'parents'));
    }
}
