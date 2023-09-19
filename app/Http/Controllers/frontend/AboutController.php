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

class AboutController extends Controller
{
    public function index()
    {
        $news = News::where('status', NewsStatus::ACTIVE)->get();
        $menus = Menu::where('status', MenuStatus::ACTIVE)->get();
        $pages = Pages::where('status', PagesStatus::ACTIVE)->get();
        $cate = Category::where('status', CategoryStatus::ACTIVE)->get();
        $configs = Configs::where('status', ConfigStatus::ACTIVE)->first();
        $banners = Banners::all();
        return view('frontend.layouts.about', compact('news', 'menus', 'pages', 'configs', 'banners','cate'));
    }
}
