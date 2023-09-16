@extends('admin.layouts.master')

@section('title', 'Admin Create Category')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">{{ __('Home.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('Home.Edit Category') }}</li>
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
                        <label for="name_vi">{{ __('Home.Category Title (VI)') }}</label>
                        <input class="form-control" type="text" id="name_vi" name="name_vi" value="{{$cate->name_vi}}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="name_en">{{ __('Home.Category Title (EN)') }}</label>
                        <input class="form-control" type="text" id="name_en" name="name_en" value="{{$cate->name_en}}" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="selectStatus">{{ __('Home.Select status') }}</label>
                        <select class="form-select" id="selectStatus" name="status">
                            @if($cate->status == \App\Enums\MenuStatus::ACTIVE)
                                <option value="{{\App\Enums\MenuStatus::ACTIVE}}">{{ __('Home.ACTIVE') }}</option>
                                <option value="{{\App\Enums\MenuStatus::INACTIVE}}">{{ __('Home.INACTIVE') }}</option>
                            @else
                                <option value="{{\App\Enums\MenuStatus::INACTIVE}}">{{ __('Home.INACTIVE') }}</option>
                                <option value="{{\App\Enums\MenuStatus::ACTIVE}}">{{ __('Home.ACTIVE') }}</option>
                            @endif
                        </select>
                    </div>
                    @if(!$listCategory->isEmpty())
                        <div class="form-group col-md-3">
                            <label for="parent_id">{{ __('Home.Choose Category Parent') }}</label>
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
                </div>
                <button type="submit" class="btn btn-primary mt-3">{{ __('Home.Save') }}</button>
            </form>
        </div>
    </section>
@endsection