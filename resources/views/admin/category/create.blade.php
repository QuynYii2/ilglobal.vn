@extends('admin.layouts.master')

@section('title', 'Admin Create Category')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">Home</a></li>
                <li class="breadcrumb-item active">Create Category</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form method="post" action="{{route('admin.category.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="name_vi">Category Title (VI)</label>
                        <input class="form-control" type="text" id="name_vi" name="name_vi" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="name_en">Category Title (EN)</label>
                        <input class="form-control" type="text" id="name_en" name="name_en" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="selectStatus">Select status</label>
                        <select class="form-select" id="selectStatus" name="status">
                            <option value="{{\App\Enums\MenuStatus::ACTIVE}}">ACTIVE</option>
                            <option value="{{\App\Enums\MenuStatus::INACTIVE}}">INACTIVE</option>
                        </select>
                    </div>
                    @if(!$listCategory->isEmpty())
                        <div class="form-group col-md-3">
                            <label for="parent_id">Choose Category Parent</label>
                            <select class="form-select" id="parent_id" name="parent_id">
                                <option value="0">--Choose category parent--</option>
                                @foreach($listCategory as $category)
                                    @if(!$category->parent_id)
                                        <option value="{{$category->id}}">{{$category->name_vi}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary mt-3">Create</button>
            </form>
        </div>
    </section>
@endsection