@extends('admin.layouts.master')

@section('title', 'Admin Create Category')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">{{ __('home.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('home.Create Category') }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form method="post" action="{{route('admin.category.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="name_vi">{{ __('home.Category Title') }} (VI)</label>
                        <input class="form-control" type="text" id="name_vi" name="name_vi" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="name_en">{{ __('home.Category Title') }} (EN)</label>
                        <input class="form-control" type="text" id="name_en" name="name_en" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="selectStatus">{{ __('home.Select status') }}</label>
                        <select class="form-select" id="selectStatus" name="status">
                            <option value="{{\App\Enums\MenuStatus::ACTIVE}}">{{ __('home.ACTIVE') }}</option>
                            <option value="{{\App\Enums\MenuStatus::INACTIVE}}">{{ __('home.INACTIVE') }}</option>
                        </select>
                    </div>
                    @if(!$listCategory->isEmpty())
                        <div class="form-group col-md-3">
                            <label for="parent_id">{{ __('home.Choose Category Parent') }}</label>
                            <select class="form-select" id="parent_id" name="parent_id">
                                <option value="0">{{ __('home.--Choose category parent--') }}</option>
                                @foreach($listCategory as $category)
                                    @if(!$category->parent_id)
                                        <option value="{{$category->id}}">{{$category->name_vi}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    @endif
                    <div class="form-group col-md-3">
                        <label for="thumbnail">{{ __('home.Choose thumbnail') }}</label>
                        <input class="form-control" type="file" id="thumbnail" name="thumbnail"
                               accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="check_box">Check</label>
                        <input type="checkbox" id="check" name="check" value="1"/>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">{{ __('home.Create') }}</button>
            </form>
        </div>
    </section>
@endsection