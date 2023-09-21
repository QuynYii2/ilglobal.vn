<?php

namespace App\Http\Controllers\Admin;

use App\Enums\PartnerStatus;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class AdminPartnerController extends Controller
{
    public function index(Request $request)
    {
        $partners = Partner::where('status', '!=', PartnerStatus::DELETED)->orderBy('id', 'desc')->get();
        return view('admin.partner.list', compact('partners'));
    }

    public function processCreate()
    {
        return view('admin.partner.create');
    }

    public function create(Request $request)
    {
        $partner = new Partner();
        $thumbnail = null;

        if ($request->hasFile('thumbnail')) {
            $bannerImage = $request->file('thumbnail');
            $bannerImageName = time() . '.' . $bannerImage->getClientOriginalExtension();
            $bannerImage->move(public_path('images'), $bannerImageName);
            $thumbnail = 'images/' . $bannerImageName;
        }

        $partner->name = $request->input('name');
        $partner->link = $request->input('link');
        $partner->status = $request->input('status');
        $partner->thumbnail = $thumbnail;
        $partner->save();
        return redirect(route('admin.partner.list'));
    }

    public function detail($id)
    {
        $partner = Partner::where('status', '!=', PartnerStatus::DELETED)
            ->where('id', $id)
            ->first();
        return view('admin.partner.edit', compact('partner'));
    }

    public function update($id, Request $request)
    {
        // Tìm đến dối tác chỉ định theo id
        $partner = Partner::where('status', '!=', PartnerStatus::DELETED)
            ->where('id', $id)
            ->first();

        // gán biến thumbnail bằng giá trị thumbnail của đối tác
        $thumbnail = $partner->thumbnail;

        if ($request->hasFile('thumbnail')) {
            $bannerImage = $request->file('thumbnail');
            $bannerImageName = time() . '.' . $bannerImage->getClientOriginalExtension();
            $bannerImage->move(public_path('images'), $bannerImageName);
            $thumbnail = 'images/' . $bannerImageName;
        }

        $partner->name = $request->input('name');
        $partner->link = $request->input('link');
        $partner->status = $request->input('status');
        $partner->thumbnail = $thumbnail;
        $partner->save();

        return redirect(route('admin.partner.list'));
    }

    public function delete($id)
    {
        $partner = Partner::where('status', '!=', PartnerStatus::DELETED)
            ->where('id', $id)
            ->first();
        $partner->status = PartnerStatus::DELETED;
        $partner->save();
        return redirect(route('admin.partner.list'));
    }
}
