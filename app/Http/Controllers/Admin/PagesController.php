<?php

namespace App\Http\Controllers\Admin;

use App\Enums\PagesStatus;
use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index()
    {
        $listPages = Pages::where('status', '!=', PagesStatus::DELETED)->get();
        return view('admin.page.list', compact('listPages'));
    }

    public function createProcess()
    {
        return view('admin.page.create');
    }

    public function create(Request $request)
    {
        try {
            $title_vi = $request->input('title_vi');
            $title_en = $request->input('title_en');

            $pages = [
                'title_vi' => $title_vi,
                'title_en' => $title_en,
                'content_vi' => $request->input('content_vi'),
                'content_en' => $request->input('content_en'),
                'short_content_vi' => $request->input('short_content_vi'),
                'short_content_en' => $request->input('short_content_en'),
                'status' => $request->input('status'),
                'user_id' => Auth::user()->id,
            ];
            $success = Pages::create($pages);
            if ($success) {
                alert()->success('Success', 'Create news success!');
                return redirect(route('admin.pages.list'));
            }
            alert()->error('Error', 'Create news error');
            return back();
        } catch (\Exception $exception) {
            alert()->error('Error', 'Please try again!');
            return back();
        }
    }

    public function edit($id)
    {
        $pages = Pages::find($id);
        if (!$pages || $pages->status == PagesStatus::DELETED) {
            return redirect(route('not.found'));
        }
        return view('admin.page.edit', compact('pages'));
    }

    public function toggle($id)
    {
        $pages = Pages::find($id);
        if (!$pages || $pages->status == PagesStatus::DELETED) {
            return response('Not found', 404);
        }
        if ($pages->status == PagesStatus::ACTIVE) {
            $pages->status = PagesStatus::INACTIVE;
        } else {
            $pages->status = PagesStatus::ACTIVE;
        }
        $pages->save();
        return $pages;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $pages = Pages::find($id);
            if (!$pages || $pages->status == PagesStatus::DELETED) {
                return redirect(route('not.found'));
            }

            $title_vi = $request->input('title_vi');
            $title_en = $request->input('title_en');

            $pages->title_vi = $title_vi;
            $pages->title_en = $title_en;

            $pages->content_vi = $request->input('content_vi');
            $pages->content_en = $request->input('content_en');
            $pages->short_content_vi = $request->input('short_content_vi');
            $pages->short_content_en = $request->input('short_content_en');
            $pages->status = $request->input('status');
            $pages->user_id = Auth::user()->id;

            $success = $pages->save();
            if ($success) {
                alert()->success('Success', 'Update news success!');
                return redirect(route('admin.pages.list'));
            }
            alert()->error('Error', 'Update news error');
            return back();
        } catch (\Exception $exception) {
            alert()->error('Error', 'Please try again!');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        try {
            $pages = Pages::find($id);
            if (!$pages || $pages->status == PagesStatus::DELETED) {
                return redirect(route('not.found'));
            }
            $pages->status = PagesStatus::DELETED;
            $pages->save();
            alert()->success('Success', 'Delete news success!');
            return redirect(route('admin.pages.list'));
        } catch (\Exception $exception) {
            return back();
        }
    }
}
