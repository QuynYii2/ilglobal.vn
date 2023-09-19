@extends('admin.layouts.master')

@section('title', 'Admin Detail Pages')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">Home</a></li>
                <li class="breadcrumb-item active">Detail Pages</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form method="post" action="{{route('admin.pages.update', $pages->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="title">{{ __('Home.Pages Title') }} (VI)</label>
                        <input type="text" class="form-control" name="title_vi" id="title" value="{{$pages->title_vi}}"
                               required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="title">{{ __('Home.Pages Title') }} (EN)</label>
                        <input type="text" class="form-control" name="title_en" id="title" value="{{$pages->title_en}}"
                               required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="selectStatus">{{ __('Select status') }}</label>
                        <select class="form-select" id="selectStatus" name="status">
                            @if($pages->status == \App\Enums\PagesStatus::ACTIVE)
                                <option value="{{\App\Enums\PagesStatus::ACTIVE}}">{{ __('Home.ACTIVE') }}</option>
                                <option value="{{\App\Enums\PagesStatus::INACTIVE}}">{{ __('Home.INACTIVE') }}</option>
                            @else
                                <option value="{{\App\Enums\PagesStatus::INACTIVE}}">{{ __('Home.INACTIVE') }}</option>
                                <option value="{{\App\Enums\PagesStatus::ACTIVE}}">{{ __('Home.ACTIVE') }}</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="short_content">{{ __('Home.Short Content') }} (VI)</label>
                    <textarea type="text" class="form-control" name="short_content_vi"
                              id="short_content"
                              placeholder="Enter short description" required>{{$pages->short_content_vi}}</textarea>
                </div>
                <div class="form-group">
                    <label for="short_content">{{ __('Home.Short Content') }} (EN)</label>
                    <textarea type="text" class="form-control" name="short_content_en"
                              id="short_content"
                              placeholder="Enter short description" required>{{$pages->short_content_en}}</textarea>
                </div>
                <div class="form-group">
                    <label for="content">{{ __('Home.Content') }} (VI)</label>
                    <textarea type="text" class="form-control description" name="content_vi" id="content"
                              placeholder="Enter description" required>{{$pages->content_vi}}</textarea>
                </div>
                <div class="form-group">
                    <label for="content">{{ __('Home.Content') }} (EN)</label>
                    <textarea type="text" class="form-control description" name="content_en" id="content"
                              placeholder="Enter description" required>{{$pages->content_en}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">{{ __('Home.Save') }}</button>
            </form>
        </div>
    </section>
@endsection