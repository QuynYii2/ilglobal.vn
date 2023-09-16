@extends('admin.layouts.master')

@section('title', 'Admin List News')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">{{ __('Home.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('Home.Create Banners') }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form method="post" action="{{route('admin.banner.create')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="bannerImage">{{ __('Home.Choose banners') }}</label>
                        <input class="form-control" type="file" id="banner_image" name="bannerImage" required
                               accept="image/*">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">{{ __('Home.Create') }}</button>
            </form>
        </div>
    </section>
@endsection