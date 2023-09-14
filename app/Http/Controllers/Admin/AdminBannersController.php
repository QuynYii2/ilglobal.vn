<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Doctrine\DBAL\Driver\Exception;
use Illuminate\Http\Request;
use App\Models\Banners;

class AdminBannersController extends Controller
{
    //
    public function createBannerProcess()
    {
        return view('admin.banner.create');
    }

    public function create(Request $request)
    {
        if ($request->hasFile('bannerImage')) {
            $bannerImage = $request->file('bannerImage');
            $bannerImageName = time() . '.' . $bannerImage->getClientOriginalExtension();
            $bannerImage->move(public_path('images'), $bannerImageName);
            $banner = new Banners();
            $banner->bannerImage = 'images/' . $bannerImageName;
            $banner->save();
        }
        return redirect()->back()->with('success', 'Ảnh đã được tải lên và lưu vào cơ sở dữ liệu thành công.');

    }

    public function showListBanner(){
        return view('admin.banner.list');
    }

}
