<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Configs;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMenuController extends Controller
{
    public function index()
    {

    }

    public function processCreate()
    {
        return view('admin.menu.create');
    }

    public function create(Request $request)
    {
        try {
            $title_vi = $request->input('title_vi');
            $title_en = $request->input('title_en');
            $url = $request->input('url');
            $status = $request->input('status');

            $menu = [
                'title_vi' => $title_vi,
                'title_en' => $title_en,
                'url' => $url,
                'status' => $status,
                'user_id' => Auth::user()->id,
            ];

            $success = Menu::create($menu);
            if ($success) {
                alert()->success('Success', 'Create menu success!');
                return redirect(route('admin.menu.processCreate'));
            }
            alert()->error('Error', 'Create logo error');
            return back();
        } catch (\Exception $exception) {
            alert()->error('Error', 'Please try again!');
            return back();
        }
    }
}
