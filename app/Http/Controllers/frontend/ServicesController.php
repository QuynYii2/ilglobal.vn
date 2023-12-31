<?php

namespace App\Http\Controllers\frontend;

use App\Enums\CategoryStatus;
use App\Enums\ConfigStatus;
use App\Enums\MenuStatus;
use App\Enums\NewsStatus;
use App\Enums\PagesStatus;
use App\Http\Controllers\Controller;
use App\Models\Banners;
use App\Models\Category;
use App\Models\Configs;
use App\Models\Menu;
use App\Models\News;
use App\Models\Pages;

class ServicesController extends Controller
{
    public function index()
    {
        $news = News::where('status', NewsStatus::ACTIVE)->get();
        $menus = Menu::where('status', MenuStatus::ACTIVE)->first();
        $pages = Pages::where('status', PagesStatus::ACTIVE)->get();
        $cate = Category::where('status', CategoryStatus::ACTIVE)->get();
        $configs = Configs::where('status', ConfigStatus::ACTIVE)->first();
        $banners = Banners::all();
        return view('frontend.layouts.services', compact('news', 'menus', 'pages', 'configs', 'banners','cate'));
    }

    public function detail($id){
        $news = News::whereRaw("FIND_IN_SET(?, news.category_vi)", [$id])->where('status', NewsStatus::ACTIVE)->get();
        $menus = Menu::where('status', MenuStatus::ACTIVE)->first();
        $pages = Pages::where('status', PagesStatus::ACTIVE)->get();
        $cate = Category::where('status', CategoryStatus::ACTIVE)->get();
        $configs = Configs::where('status', ConfigStatus::ACTIVE)->first();
        $banners = Banners::all();
        return view('frontend.layouts.service-news', compact('news', 'menus', 'pages', 'configs', 'banners','cate'));
    }
}
