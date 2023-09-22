@extends('admin.layouts.master')

@section('title', 'Admin Create Partner')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">{{ __('home.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('home.Create Parents') }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form method="post" action="{{route('admin.partner.create')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="thumbnail">{{ __('home.Choose thumbnail') }}</label>
                        <input class="form-control" type="file" id="thumbnail" name="thumbnail" required
                               accept="image/*">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" name="link" id="link">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="selectStatus">{{ __('home.Select status') }}</label>
                        <select class="form-select" id="selectStatus" name="status">
                            <option value="{{\App\Enums\PartnerStatus::ACTIVE}}">{{ __('home.ACTIVE') }}</option>
                            <option value="{{\App\Enums\PartnerStatus::INACTIVE}}">{{ __('home.INACTIVE') }}</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">{{ __('home.Create') }}</button>
            </form>
        </div>
    </section>
@endsection