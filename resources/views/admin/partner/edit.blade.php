@extends('admin.layouts.master')

@section('title', 'Admin Detail Partner')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">{{ __('home.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('home.Edit Partner') }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form method="post" action="{{route('admin.partner.update', $partner->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required value="{{$partner->name}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="thumbnail">{{ __('home.Choose thumbnail') }}</label>
                        <input class="form-control" type="file" id="thumbnail" name="thumbnail"
                               accept="image/*">
                        <img src="{{ asset($partner->thumbnail) }}" alt="" width="80px" height="80xp">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" name="link" id="link" value="{{$partner->link}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="selectStatus">{{ __('home.Select status') }}</label>
                        <select class="form-select" id="selectStatus" name="status">
                            @if($partner->status == \App\Enums\PartnerStatus::ACTIVE)
                                <option value="{{\App\Enums\PartnerStatus::ACTIVE}}">{{ __('home.ACTIVE') }}</option>
                                <option value="{{\App\Enums\PartnerStatus::INACTIVE}}">{{ __('home.INACTIVE') }}</option>
                            @else
                                <option value="{{\App\Enums\PartnerStatus::INACTIVE}}">{{ __('home.INACTIVE') }}</option>
                                <option value="{{\App\Enums\PartnerStatus::ACTIVE}}">{{ __('home.ACTIVE') }}</option>
                            @endif
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">{{ __('home.Save') }}</button>
            </form>
        </div>
    </section>
@endsection