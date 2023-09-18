@extends('admin.layouts.master')

@section('title', 'Admin List News')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active">Create Banners</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        @if ($banner)
            <div class="row">
                <form method="POST" action="{{ route('update.banner', $banner->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="bannerImage">Update your new banner</label>
                            <input class="form-control" type="file" id="banner_image" name="bannerImage" required
                                   accept="image/*">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                </form>
            </div>
        @else
            <p>No banner found for editing.</p>
        @endif
    </section>
@endsection