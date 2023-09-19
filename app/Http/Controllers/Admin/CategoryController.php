<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CategoryStatus;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $listCategory = Category::where('status', '!=', CategoryStatus::DELETED)->get();
        return view('admin.category.list', compact('listCategory'));
    }


    public function create()
    {
        $listCategory = Category::where('status', '!=', CategoryStatus::DELETED)->get();
        return view('admin.category.create',compact('listCategory'));
    }


    public function store(Request $request)
    {
        try {
            $name_vi = $request->input('name_vi');
            $name_en = $request->input('name_en');
            $parent_id = $request->input('parent_id');
            $thumbnail = $request->file('thumbnail');
            $check = $request->input('check');
            $status = $request->input('status');

            if ($thumbnail) {
                $imageName = time() . '.' . $thumbnail->getClientOriginalExtension();
                $destinationPath = public_path('upload/images');
                $thumbnail->move($destinationPath, $imageName);
                $imageURL = asset('upload/images/' . $imageName);
            } else {
                $imageURL = null;
            }
            if ($parent_id == '0'){
                $parent_id = null;
            }
            if (!$check){
                $check=0;
            }

            $category = [
                'name_vi' => $name_vi,
                'name_en' => $name_en,
                'parent_id' => $parent_id,
                'status' => $status,
                'thumbnail' => $imageURL,
                'check' => $check,
                'user_id' => Auth::user()->id,
            ];

            $success = Category::create($category);
            if ($success) {
                alert()->success('Success', 'Create menu success!');
                return redirect(route('admin.category.list'));
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
        $listCategory = Category::where('status', '!=', CategoryStatus::DELETED)->get();
        $cate = Category::find($id);
        if (!$cate || $cate->status == CategoryStatus::DELETED) {
            return redirect(route('not.found'));
        }
        return view('admin.category.edit', compact('cate','listCategory'));
    }

    public function update(Request $request, $id)
    {
        try {
            $cate = Category::find($id);

            $name_vi = $request->input('name_vi');
            $name_en = $request->input('name_en');
            $status = $request->input('status');
            $parent_id = $request->input('parent_id');
            $thumbnail = $request->file('thumbnail');
            $check = $request->input('check');

            if ($parent_id == '0'){
                $parent_id = null;
            }

            if ($cate->parent_id != $parent_id){
                $cate->parent_id = $parent_id;
            }
            if (!$check){
                $check=0;
            }
            if ($thumbnail) {
                $imageName = time() . '.' . $thumbnail->getClientOriginalExtension();
                $destinationPath = public_path('upload/images');
                $thumbnail->move($destinationPath, $imageName);
                $imageURL = asset('upload/images/' . $imageName);
            } else {
                $imageURL = $cate->thumbnail;
            }
            $cate->thumbnail = $imageURL;
            $cate->name_vi = $name_vi;
            $cate->name_en = $name_en;
            $cate->status = $status;
            $cate->check = $check;
            $success = $cate->save();
            if ($success) {
                alert()->success('Success', 'Update news success!');
                return redirect(route('admin.category.list'));
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
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try {
            $cate = Category::find($id);
            if (!$cate || $cate->status == CategoryStatus::DELETED) {
                return redirect(route('not.found'));
            }

            $cate->status = CategoryStatus::DELETED;
            $cate->save();
            alert()->success('Success', 'Delete menu success!');
            return redirect(route('admin.category.list'));
        } catch (\Exception $exception) {
            return back();
        }
    }
}
