<?php

namespace App\Http\Controllers\Admin;

use App\Enums\NewsStatus;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminNewsController extends Controller
{
    public function index()
    {
        $listNews = News::where('status', '!=', NewsStatus::DELETED)->get();
        return view('admin.news.list', compact('listNews'));
    }

    public function createProcess()
    {
        return view('admin.news.create');
    }

    public function create(Request $request)
    {
        try {
            $title_vi = $request->input('title_vi');
            $title_en = $request->input('title_en');
            $thumbnail = $request->file('thumbnail');

            if ($thumbnail) {
                $imageName = time() . '.' . $thumbnail->getClientOriginalExtension();
                $destinationPath = public_path('upload/images');
                $thumbnail->move($destinationPath, $imageName);
                $imageURL = asset('upload/images/' . $imageName);
            } else {
                $imageURL = null;
            }
            $news = [
                'title_vi' => $title_vi,
                'title_en' => $title_en,
                'thumbnail' => $imageURL,
                'content_vi' => $request->input('content_vi'),
                'content_en' => $request->input('content_en'),
                'short_content_vi' => $request->input('short_content_vi'),
                'short_content_en' => $request->input('short_content_en'),
                'status' => $request->input('status'),
                'user_id' => Auth::user()->id,
            ];
            $success = News::create($news);
            if ($success) {
                alert()->success('Success', 'Create user success!');
                return redirect(route('admin.news.list'));
            }
            alert()->error('Error', 'Create user error');
            return back();
        } catch (\Exception $exception) {
            dd($exception);
            alert()->error('Error', 'Please try again!');
            return back();
        }
    }

    public function detail($id)
    {
        $news = News::find($id);
        if (!$news || $news->status == NewsStatus::DELETED) {
            return redirect(route('not.found'));
        }
        return view('admin.news.edit', compact('news'));
    }

    public function toggle($id)
    {
        $news = News::find($id);
        if (!$news || $news->status == NewsStatus::DELETED) {
            return response('Not found', 404);
        }
        if ($news->status == NewsStatus::ACTIVE) {
            $news->status = NewsStatus::INACTIVE;
        } else {
            $news->status = NewsStatus::ACTIVE;
        }
        $news->save();
        return $news;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $news = News::find($id);
            if (!$news || $news->status == NewsStatus::DELETED) {
                return redirect(route('not.found'));
            }

            $title_vi = $request->input('title_vi');
            $title_en = $request->input('title_en');
            $thumbnail = $request->file('thumbnail');

            if ($thumbnail) {
                $imageName = time() . '.' . $thumbnail->getClientOriginalExtension();
                $destinationPath = public_path('upload/images');
                $thumbnail->move($destinationPath, $imageName);
                $imageURL = asset('upload/images/' . $imageName);
            } else {
                $imageURL = $news->thumbnail;
            }

            $news->title_vi = $title_vi;
            $news->title_en = $title_en;

            $news->thumbnail = $imageURL;
            $news->content_vi = $request->input('content_vi');
            $news->content_en = $request->input('content_en');
            $news->short_content_vi = $request->input('short_content_vi');
            $news->short_content_en = $request->input('short_content_en');
            $news->status = $request->input('status');
            $news->user_id = Auth::user()->id;

            $success = $news->save();
            if ($success) {
                alert()->success('Success', 'Create user success!');
                return redirect(route('admin.news.list'));
            }
            alert()->error('Error', 'Create user error');
            return back();
        } catch (\Exception $exception) {
            alert()->error('Error', 'Please try again!');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $news = News::find($id);
            if (!$news || $news->status == NewsStatus::DELETED) {
                return redirect(route('not.found'));
            }

            $news->status = NewsStatus::DELETED;
            $news->save();
            return redirect(route('admin.news.list'));
        } catch (\Exception $exception) {
            return back();
        }
    }
}
