@extends('admin.layouts.master')

@section('title', 'Admin Create Category')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">{{ __('home.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('home.Edit Category') }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form method="post" action="{{route('admin.category.update',$cate->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="name_vi">{{ __('home.Category Title') }} (VI)</label>
                        <input class="form-control" type="text" id="name_vi" name="name_vi" value="{{$cate->name_vi}}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="name_en">{{ __('home.Category Title') }} (EN)</label>
                        <input class="form-control" type="text" id="name_en" name="name_en" value="{{$cate->name_en}}" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="selectStatus">{{ __('home.Select status') }}</label>
                        <select class="form-select" id="selectStatus" name="status">
                            @if($cate->status == \App\Enums\MenuStatus::ACTIVE)
                                <option value="{{\App\Enums\MenuStatus::ACTIVE}}">{{ __('home.ACTIVE') }}</option>
                                <option value="{{\App\Enums\MenuStatus::INACTIVE}}">{{ __('home.INACTIVE') }}</option>
                            @else
                                <option value="{{\App\Enums\MenuStatus::INACTIVE}}">{{ __('home.INACTIVE') }}</option>
                                <option value="{{\App\Enums\MenuStatus::ACTIVE}}">{{ __('home.ACTIVE') }}</option>
                            @endif
                        </select>
                    </div>
                    @if(!$listCategory->isEmpty())
                        <div class="form-group col-md-3">
                            <label for="parent_id">{{ __('home.Choose Category Parent') }}</label>
                            <select class="form-select" id="parent_id" name="parent_id">
                                @if($cate->parent_id)
                                    @php
                                        $parent_cate = \App\Models\Category::find($cate->parent_id);
                                    @endphp
                                    <option value="{{$parent_cate->id}}">{{$parent_cate->name_vi}}</option>
                                @else
                                    <option value="0">--</option>
                                @endif
                                @foreach($listCategory as $cate)
                                    @if(!$cate->parent_id)
                                        <option value="{{$cate->id}}">{{$cate->name_vi}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    @endif
                    <div class="form-group col-md-3">
                            <label for="thumbnail">{{ __('home.Choose thumbnail') }}</label>
                            <input class="form-control" type="file" id="thumbnail" name="thumbnail"
                                   accept="image/*">
                            @if($cate->thumbnail)
                            <img src="{{$cate->thumbnail}}" alt="" width="60px" height="60px">
                            @endif
                        </div>
                    <div class="form-group">
                        <label for="check_box">Check</label>
                        @if($cate->check == 1)
                            <input type="checkbox" id="check" name="check" value="1" checked/>
                        @else
                            <input type="checkbox" id="check" name="check" value="1" />
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">{{ __('home.Save') }}</button>
            </form>
        </div>
    </section>
@endsection