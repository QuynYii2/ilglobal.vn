@extends('admin.layouts.master')

@section('title', 'Admin Create News')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">{{ __('Home.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('Home.Company Profile') }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form method="post" action="{{route('admin.configs.create')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="thumbnail">{{ __('Home.Choose logo') }}</label>
                        @if($config)
                            <input class="form-control" type="file" id="logo" name="logo"
                                   accept="image/*">
                            <img src="{{$config->logo}}" alt="" width="60px" height="60px">
                        @else
                            <input class="form-control" type="file" id="logo" name="logo" required
                                   accept="image/*">
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="thumbnail">{{ __('Home.Choose avatar') }}</label>
                        @if($config)
                            <input class="form-control" type="file" id="avatar" name="avatar"
                                   accept="image/*">
                            <img src="{{$config->avatar}}" alt="" width="60px" height="60px">
                        @else
                            <input class="form-control" type="file" id="avatar" name="avatar" required
                                   accept="image/*">
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="facebook">{{ __('Home.Name company') }}</label>
                        @if($config)
                            <input class="form-control" type="text" id="name_company" name="name_company" value="{{$config->name_company}}" >
                        @else
                            <input class="form-control" type="text" id="name_company" name="name_company" required>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">{{ __('Home.Email') }}</label>
                        @if($config)
                            <input class="form-control" type="email" id="email" name="email" value="{{$config->email}}" >
                        @else
                            <input class="form-control" type="email" id="email" name="email" required>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="phone_number">{{ __('Home.PhoneNumber') }}</label>
                        @if($config)
                            <input class="form-control" type="number" id="phone" name="phone" value="{{$config->phone}}" >
                        @else
                            <input class="form-control" type="number" id="phone" name="phone" required>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cskh">{{ __('Home.CSKH') }}</label>
                        @if($config)
                            <input class="form-control" type="text" id="cskh" name="cskh" value="{{$config->cskh}}" >
                        @else
                            <input class="form-control" type="text" id="cskh" name="cskh" required>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="zalo">Zalo</label>
                        @if($config)
                            <input class="form-control" type="text" id="zalo" name="zalo" value="{{$config->zalo}}" >
                        @else
                            <input class="form-control" type="text" id="zalo" name="zalo" required>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="facebook">Facebook</label>
                        @if($config)
                            <input class="form-control" type="text" id="facebook" name="facebook" value="{{$config->facebook}}" >
                        @else
                            <input class="form-control" type="text" id="facebook" name="facebook" required>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="address">{{ __('Home.Address') }}</label>
                        @if($config)
                            <input class="form-control" type="text" id="address" name="address" value="{{$config->address}}" >
                        @else
                            <input class="form-control" type="text" id="address" name="address" required>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="selectStatus">{{ __('Home.Select status') }}</label>
                        <select class="form-select" id="selectStatus" name="status">
                            @if($config)
                                @if($config->status == \App\Enums\ConfigStatus::ACTIVE)
                                    <option value="{{\App\Enums\ConfigStatus::ACTIVE}}">{{ __('Home.ACTIVE') }}</option>
                                    <option value="{{\App\Enums\ConfigStatus::INACTIVE}}">{{ __('Home.INACTIVE') }}</option>
                                @else
                                    <option value="{{\App\Enums\ConfigStatus::INACTIVE}}">{{ __('Home.INACTIVE') }}</option>
                                    <option value="{{\App\Enums\ConfigStatus::ACTIVE}}">{{ __('Home.ACTIVE') }}</option>
                                @endif
                            @else
                                <option value="{{\App\Enums\ConfigStatus::ACTIVE}}">{{ __('Home.ACTIVE') }}</option>
                                <option value="{{\App\Enums\ConfigStatus::INACTIVE}}">{{ __('Home.INACTIVE') }}</option>
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="short_content">{{ __('Home.Short Content') }} (VI)</label>
                        @if($config)
                            <textarea type="text" class="form-control" name="short_introduction_vi"
                                      id="short_content"
                                      placeholder="Enter short description" >{{$config->short_introduction_vi}}</textarea>
                        @else
                            <textarea type="text" class="form-control" name="short_introduction_vi"
                                      id="short_content"
                                      placeholder="Enter short description" required></textarea>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="short_content">{{ __('Home.Short Content') }} (EN)</label>
                        @if($config)
                            <textarea type="text" class="form-control" name="short_introduction_en"
                                      id="short_content"
                                      placeholder="Enter short description" >{{$config->short_introduction_en}}</textarea>
                        @else
                            <textarea type="text" class="form-control" name="short_introduction_en"
                                      id="short_content"
                                      placeholder="Enter short description" ></textarea>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="content">{{ __('Home.Content') }} (VI)</label>
                        @if($config)
                            <textarea type="text" class="form-control description" name="introduce_vi" id="content"
                                      placeholder="Enter description" >{{$config->introduce_vi}}</textarea>
                        @else
                            <textarea type="text" class="form-control description" name="introduce_vi" id="content"
                                      placeholder="Enter description" required></textarea>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="content">{{ __('Home.Content') }} (EN)</label>
                        @if($config)
                            <textarea type="text" class="form-control description" name="introduce_en" id="content"
                                      placeholder="Enter description" >{{$config->introduce_en}}</textarea>
                        @else
                            <textarea type="text" class="form-control description" name="introduce_en" id="content"
                                      placeholder="Enter description" ></textarea>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">{{ __('Home.Create') }}</button>
            </form>
        </div>
    </section>
@endsection