@extends('admin.layouts.master')

@section('title', 'Admin Edit News')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">Home</a></li>
                <li class="breadcrumb-item active">Create Menu</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form method="post" action="{{route('admin.menu.update',$menu->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="title_vi">Menu Title (VI)</label>
                        <input class="form-control" type="text" id="title_vi" name="title_vi" value="{{$menu->title_vi}}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="title_en">Menu Title (EN)</label>
                        <input class="form-control" type="text" id="title_en" name="title_en" value="{{$menu->title_en}}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="url">URL</label>
                        <input class="form-control" type="text" id="url" name="url" value="{{$menu->url}}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="selectStatus">Select status</label>
                        <select class="form-select" id="selectStatus" name="status">
                            @if($menu->status == \App\Enums\MenuStatus::ACTIVE)
                                <option value="{{\App\Enums\MenuStatus::ACTIVE}}">ACTIVE</option>
                                <option value="{{\App\Enums\MenuStatus::INACTIVE}}">INACTIVE</option>
                            @else
                                <option value="{{\App\Enums\MenuStatus::INACTIVE}}">INACTIVE</option>
                                <option value="{{\App\Enums\MenuStatus::ACTIVE}}">ACTIVE</option>
                            @endif
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Save</button>
            </form>
        </div>
    </section>
@endsection