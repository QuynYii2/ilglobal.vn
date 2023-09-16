@extends('admin.layouts.master')

@section('title', 'Admin Edit News')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">{{ __('Home.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('Home.Edit Menu') }}</li>
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
                        <label for="location">{{ __('Home.Choose location...') }}</label>
                        <select id="location" class="form-select" name="location">
                            @if($menu->location == 'header')
                                <option value="header">{{ __('Home.Header') }}</option>
                                <option value="footer">{{ __('Home.Footer') }}</option>
                            @else
                                <option value="footer">{{ __('Home.Footer') }}</option>
                                <option value="header">{{ __('Home.Header') }}</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="title_vi">{{ __('Home.Menu Title') }} (VI)</label>
                        <input class="form-control" type="text" id="title_vi" name="title_vi" value="{{$menu->title_vi}}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="title_en">{{ __('Home.Menu Title') }} (EN)</label>
                        <input class="form-control" type="text" id="title_en" name="title_en" value="{{$menu->title_en}}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="url">{{ __('Home.URL') }}</label>
                        <input class="form-control" type="text" id="url" name="url" value="{{$menu->url}}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="selectStatus">{{ __('Home.Select status') }}</label>
                        <select class="form-select" id="selectStatus" name="status">
                            @if($menu->status == \App\Enums\MenuStatus::ACTIVE)
                                <option value="{{\App\Enums\MenuStatus::ACTIVE}}">{{ __('Home.ACTIVE') }}</option>
                                <option value="{{\App\Enums\MenuStatus::INACTIVE}}">{{ __('Home.INACTIVE') }}</option>
                            @else
                                <option value="{{\App\Enums\MenuStatus::INACTIVE}}">{{ __('Home.INACTIVE') }}</option>
                                <option value="{{\App\Enums\MenuStatus::ACTIVE}}">{{ __('Home.ACTIVE') }}</option>
                            @endif
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">{{ __('Home.Save') }}</button>
            </form>
        </div>
    </section>
@endsection