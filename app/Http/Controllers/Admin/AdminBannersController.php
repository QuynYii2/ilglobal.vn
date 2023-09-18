<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Doctrine\DBAL\Driver\Exception;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Models\Banners;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

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
        $bannerImages = DB::table('banners')
            ->select('id', 'bannerImage', 'created_at', 'updated_at')
            ->get();
        return view('admin.banner.list', ['bannerImages' => $bannerImages]);
    }
    public function bannerEdit(Request $request, $id){

        $banner = Banners::find($id);
        if (!$banner){
            return redirect()->back()->with('error', 'Không tìm thấy mục');
        }
        if ($request->hasFile('bannerImage')){

        }
        return view('admin.banner.edit', ['banner' => $banner]);
    }

    public function bannerUpdate(Request $request, $id){
        $request -> validate([
            'bannerImage' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $bannerImage = Banners::find($id);
        if (!$bannerImage){
            return redirect()->back()->with('error', 'Không tìm thấy banner ');
        }
        if ($request -> hasFile('bannerImage')){
            $newBannerImage = $request->file('bannerImage');
            $bannerImageName = time() . '.' . $newBannerImage->getClientOriginalExtension();
            $newBannerImage->move(public_path('images'), $bannerImageName);
            $bannerImage->bannerImage = 'image' . $bannerImageName;
        }
        $bannerImage->save();
        return redirect()->back()->with('success', 'Cập nhật ảnh của bạn thành công');
    }

    public function deleteBanner($id){
        $banner = Banners::find($id);
        if(!$banner){
            return redirect()->back()->with('error', 'Không tìm thấy id của banner');
        }
        $banner -> delete();
        return redirect()->back()->with('success', 'Xóa banner thành công');
    }
}
