<?php

namespace App\Http\Controllers\Admin;

use App\Enums\MenuStatus;
use App\Http\Controllers\Controller;
use App\Models\Configs;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMenuController extends Controller
{
    public function index()
    {
        $listMenu = Menu::where('status', '!=', MenuStatus::DELETED)->get();
        return view('admin.menu.list', compact('listMenu'));
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
                return redirect(route('admin.menu.list'));
            }
            alert()->error('Error', 'Create configs error');
            return back();
        } catch (\Exception $exception) {
            alert()->error('Error', 'Please try again!');
            return back();
        }
    }

    public function edit($id)
    {
        $menu = Menu::find($id);
        if (!$menu || $menu->status == MenuStatus::DELETED) {
            return redirect(route('not.found'));
        }
        return view('admin.menu.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        try {
            $menu = Menu::find($id);

            $title_vi = $request->input('title_vi');
            $title_en = $request->input('title_en');
            $url = $request->input('url');
            $status = $request->input('status');

            $menu->title_vi = $title_vi;
            $menu->title_en = $title_en;

            $menu->url = $url;
            $menu->status = $status;
            $success = $menu->save();
            if ($success) {
                alert()->success('Success', 'Update news success!');
                return redirect(route('admin.menu.list'));
            }
            alert()->error('Error', 'Update news error');
            return back();
        } catch (\Exception $exception) {
            alert()->error('Error', 'Please try again!');
            return back();
        }
    }

    public function delete(string $id)
    {
        try {
            $menu = Menu::find($id);
            if (!$menu || $menu->status == MenuStatus::DELETED) {
                return redirect(route('not.found'));
            }

            $menu->status = MenuStatus::DELETED;
            $menu->save();
            alert()->success('Success', 'Delete menu success!');
            return redirect(route('admin.menu.list'));
        } catch (\Exception $exception) {
            return back();
        }
    }

}
