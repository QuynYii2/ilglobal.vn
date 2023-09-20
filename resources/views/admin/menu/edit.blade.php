@extends('admin.layouts.master')

@section('title', 'Admin Edit News')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">{{ __('home.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('home.Edit Menu') }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form method="post" action="{{route('admin.menu.update',$menu->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="location">{{ __('home.Choose location...') }}</label>
                        <select id="location" class="form-select" name="location">
                            @if($menu->location == 'header')
                                <option value="header">{{ __('home.Header') }}</option>
                                <option value="footer">{{ __('home.Footer') }}</option>
                            @else
                                <option value="footer">{{ __('home.Footer') }}</option>
                                <option value="header">{{ __('home.Header') }}</option>
                            @endif
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="arrange">{{ __('home.Choose location...') }}</label>
                        <input class="form-control" type="number" id="arrange" name="arrange" value="{{$menu->arrange}}" >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="title_vi">{{ __('home.Menu Title') }} (VI)</label>
                        <input class="form-control" type="text" id="title_vi" name="title_vi" value="{{$menu->title_vi}}" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="title_en">{{ __('home.Menu Title') }} (EN)</label>
                        <input class="form-control" type="text" id="title_en" name="title_en" value="{{$menu->title_en}}" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="url">{{ __('home.URL') }}</label>
                        <input class="form-control" type="text" id="url" name="url" value="{{$menu->url}}" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="selectStatus">{{ __('home.Select status') }}</label>
                        <select class="form-select" id="selectStatus" name="status">
                            @if($menu->status == \App\Enums\MenuStatus::ACTIVE)
                                <option value="{{\App\Enums\MenuStatus::ACTIVE}}">{{ __('home.ACTIVE') }}</option>
                                <option value="{{\App\Enums\MenuStatus::INACTIVE}}">{{ __('home.INACTIVE') }}</option>
                            @else
                                <option value="{{\App\Enums\MenuStatus::INACTIVE}}">{{ __('home.INACTIVE') }}</option>
                                <option value="{{\App\Enums\MenuStatus::ACTIVE}}">{{ __('home.ACTIVE') }}</option>
                            @endif
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">{{ __('home.Save') }}</button>
            </form>
        </div>
    </section>
@endsection