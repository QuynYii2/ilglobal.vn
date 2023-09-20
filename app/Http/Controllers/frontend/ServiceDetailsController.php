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
use Illuminate\Http\Request;

class ServiceDetailsController extends Controller
{
    public function index($id)
    {

        {
            $pages = Pages::where('status', PagesStatus::ACTIVE)->get();
            $cate = Category::where('status', CategoryStatus::ACTIVE)->get();
            $configs = Configs::where('status', ConfigStatus::ACTIVE)->first();
            $menus = Menu::where('status', MenuStatus::ACTIVE)->first();
            $productDetail = News::where('id', $id)->first();
            $categories = News::where('status', NewsStatus::ACTIVE)
                ->where('id','!=', $id)
                ->limit(10)
                ->orderByDesc('id')
                ->get();
            $banners = Banners::all();
            return view('frontend.layouts.service-details', [
                'productDetail' => $productDetail,
                'pages' => $pages,
                'cate' => $cate,
                'configs' => $configs,
                'banners' => $banners,
                'menus' => $menus,
                'categories' => $categories,
            ]);
        }

    }
}
