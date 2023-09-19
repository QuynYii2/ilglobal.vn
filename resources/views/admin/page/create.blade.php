@extends('admin.layouts.master')

@section('title', 'Admin Create News')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">Home</a></li>
                <li class="breadcrumb-item active">{{ __('Home.Create Pages') }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form method="post" action="{{route('admin.pages.create')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="title">{{ __('Home.Pages Title') }} (VI)</label>
                        <input type="text" class="form-control" name="title_vi" id="title_vi" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="title">{{ __('Home.Pages Title') }} (EN)</label>
                        <input type="text" class="form-control" name="title_en" id="title_en" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="selectStatus">{{ __('Home.Select status') }}</label>
                        <select class="form-select" id="selectStatus" name="status">
                            <option value="{{\App\Enums\PagesStatus::ACTIVE}}">{{ __('Home.ACTIVE') }}</option>
                            <option value="{{\App\Enums\PagesStatus::INACTIVE}}">{{ __('Home.INACTIVE') }}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="short_content">{{ __('Home.Short Content') }} (VI)</label>
                    <textarea type="text" class="form-control " name="short_content_vi"
                              id="short_content_vi"
                              placeholder="{{ __('Home.Enter short description') }}" required></textarea>
                </div>
                <div class="form-group">
                    <label for="short_content">{{ __('Home.Short Content') }} (EN)</label>
                    <textarea type="text" class="form-control " name="short_content_en"
                              id="short_content_en"
                              placeholder="{{ __('Home.Enter short description') }}" ></textarea>
                </div>
                <div class="form-group">
                    <label for="content">{{ __('Home.Content') }} (VI)</label>
                    <textarea type="text" class="form-control description" name="content_vi" id="content_vi"
                              placeholder="{{ __('Home.Enter description') }}" required></textarea>
                </div>
                <div class="form-group">
                    <label for="content">{{ __('Home.Content') }} (EN)</label>
                    <textarea type="text" class="form-control description" name="content_en" id="content_en"
                              placeholder="{{ __('Home.Enter description') }}" ></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">{{ __('Home.Create') }}</button>
            </form>
        </div>
    </section>
@endsection