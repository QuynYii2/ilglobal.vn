@extends('admin.layouts.master')

@section('title', 'Admin Create Category')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">{{ __('home.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('home.Edit Category') }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form method="post" action="{{route('admin.track.update',$track->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="thumbnail">{{ __('home.Choose thumbnail') }}</label>
                        <input class="form-control" type="file" id="thumbnail" name="thumbnail"
                               accept="image/*">
                        <img src="{{$track->thumbnail}}" alt="" width="60px" height="60px">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="title">URL</label>
                        <input type="text" class="form-control" name="url" id="url" value="{{$track->url}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="selectStatus">{{ __('home.Select status') }}</label>
                        <select class="form-select" id="sele
                        ctStatus" name="status">
                            @if($track->status == \App\Enums\TrackandTraceStatus::ACTIVE)
                                <option value="{{\App\Enums\TrackandTraceStatus::ACTIVE}}">{{ __('home.ACTIVE') }}</option>
                                <option value="{{\App\Enums\TrackandTraceStatus::INACTIVE}}">{{ __('home.INACTIVE') }}</option>
                            @else
                                <option value="{{\App\Enums\TrackandTraceStatus::INACTIVE}}">{{ __('home.INACTIVE') }}</option>
                                <option value="{{\App\Enums\TrackandTraceStatus::ACTIVE}}">{{ __('home.ACTIVE') }}</option>
                            @endif
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">{{ __('home.Save') }}</button>
            </form>
        </div>
    </section>
@endsection