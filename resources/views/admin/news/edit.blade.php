@extends('admin.layouts.master')

@section('title', 'Admin Detail News')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">{{ __('home.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('home.Edit News') }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form method="post" action="{{route('admin.news.update', $news->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="title">{{ __('home.News Title') }} (VI)</label>
                        <input type="text" class="form-control" name="title_vi" id="title" value="{{$news->title_vi}}"
                               required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="title">{{ __('home.News Title') }} (EN)</label>
                        <input type="text" class="form-control" name="title_en" id="title" value="{{$news->title_en}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="thumbnail">{{ __('home.Choose thumbnail') }}</label>
                        <input class="form-control" type="file" id="thumbnail" name="thumbnail"
                               accept="image/*">
                        <img src="{{$news->thumbnail}}" alt="" width="60px" height="60px">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="selectStatus">Select status</label>
                        <select class="form-select" id="selectStatus" name="status">
                            @if($news->status == \App\Enums\NewsStatus::ACTIVE)
                                <option value="{{\App\Enums\NewsStatus::ACTIVE}}">{{ __('home.ACTIVE') }}</option>
                                <option value="{{\App\Enums\NewsStatus::INACTIVE}}">{{ __('home.INACTIVE') }}</option>
                            @else
                                <option value="{{\App\Enums\NewsStatus::INACTIVE}}">{{ __('home.INACTIVE') }}</option>
                                <option value="{{\App\Enums\NewsStatus::ACTIVE}}">{{ __('home.ACTIVE') }}</option>
                            @endif
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="name">{{ __('home.Choose Category') }}</label>
                        @php
                            $categories = \Illuminate\Support\Facades\DB::table('categories')->where('parent_id', null)->get();
                        @endphp
                        <div id="checkboxes">
                            @foreach($categories as $category)
                                @php
                                    $isChecked = null;
                                    $value = explode(',', $news->category_vi);
                                    foreach($value as $item){
                                        if($item == $category->id ){
                                            $isChecked = true;
                                            }
                                        }
                                @endphp
                                <label class="category" for="category-{{$category->id}}">
                                    <input type="checkbox" id="category-{{$category->id}}"
                                           name="category[]"
                                           value="{{$category->id}}" {{ $isChecked ? 'checked' : '' }}
                                           class="inputCheckboxCategory mr-2 p-3"/>
                                    <span class="labelCheckboxCategory">{{($category->name_vi)}}</span>
                                </label>
                                @if(!$categories->isEmpty())
                                    @php
                                        $listChild = \Illuminate\Support\Facades\DB::table('categories')->where('parent_id', $category->id)->get();
                                    @endphp
                                    @foreach($listChild as $child)
                                        @php
                                            $isChecked1 = null;
                                            $value1 = explode(',', $news->category_vi);
                                            foreach($value1 as $item){
                                                if($item == $child->id ){
                                                    $isChecked1 = true;
                                                    }
                                                }
                                        @endphp
                                        <label class="category-child mr-2" for="category-{{$child->id}}">
                                            <input type="checkbox" id="category-{{$child->id}}"
                                                   name="category[]"
                                                   value="{{$child->id}}" {{ $isChecked1 ? 'checked' : '' }}
                                                   class="inputCheckboxCategory mr-2 p-3"/>
                                            <span class="labelCheckboxCategory">{{($child->name_vi)}}</span>
                                        </label>
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="short_content">{{ __('home.Short Content') }} (VI)</label>
                    <textarea type="text" class="form-control" name="short_content_vi"
                              id="short_content"
                              placeholder="Enter short" required>{{$news->short_content_vi}}</textarea>
                </div>
                <div class="form-group">
                    <label for="short_content">{{ __('home.Short Content') }} (EN)</label>
                    <textarea type="text" class="form-control description" name="short_content_en"
                              id="short_content"
                              placeholder="Enter short description">{{$news->short_content_en}}</textarea>
                </div>
                <div class="form-group">
                    <label for="content">{{ __('home.Content') }} (VI)</label>
                    <textarea type="text" class="form-control description" name="content_vi" id="content"
                              placeholder="Enter description" required>{{$news->content_vi}}</textarea>
                </div>
                <div class="form-group">
                    <label for="content">{{ __('home.Content') }} (EN)</label>
                    <textarea type="text" class="form-control description" name="content_en" id="content"
                              placeholder="Enter description">{{$news->content_en}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">{{ __('home.Save') }}</button>
            </form>
        </div>
    </section>
@endsection