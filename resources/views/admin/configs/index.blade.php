@extends('admin.layouts.master')

@section('title', 'Admin Create News')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active">Create Logo</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form method="post" action="{{route('admin.configs.create')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="thumbnail">Choose logo</label>
                        <input class="form-control" type="file" id="logo" name="logo" required
                               accept="image/*">
                        @if($config)
                            <img src="{{$config->logo}}" alt="" width="60px" height="60px">
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        <label for="email">Email</label>
                        @if($config)
                            <input class="form-control" type="email" id="email" name="email" value="{{$config->email}}" required>
                        @else
                            <input class="form-control" type="email" id="email" name="email" required>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        <label for="phone_number">PhoneNumber</label>
                        @if($config)
                            <input class="form-control" type="number" id="phone" name="phone" value="{{$config->phone}}" required>
                        @else
                            <input class="form-control" type="number" id="phone" name="phone" required>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        <label for="cskh">CSKH</label>
                        @if($config)
                            <input class="form-control" type="text" id="cskh" name="cskh" value="{{$config->cskh}}" required>
                        @else
                            <input class="form-control" type="text" id="cskh" name="cskh" required>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        <label for="zalo">Zalo</label>
                        @if($config)
                            <input class="form-control" type="text" id="zalo" name="zalo" value="{{$config->zalo}}" required>
                        @else
                            <input class="form-control" type="text" id="zalo" name="zalo" required>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        <label for="facebook">Facebook</label>
                        @if($config)
                            <input class="form-control" type="text" id="facebook" name="facebook" value="{{$config->facebook}}" required>
                        @else
                            <input class="form-control" type="text" id="facebook" name="facebook" required>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        <label for="address">Address</label>
                        @if($config)
                            <input class="form-control" type="text" id="address" name="address" value="{{$config->address}}" required>
                        @else
                            <input class="form-control" type="text" id="address" name="address" required>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        <label for="selectStatus">Select status</label>
                        <select class="form-select" id="selectStatus" name="status">
                            <option value="{{\App\Enums\NewsStatus::ACTIVE}}">ACTIVE</option>
                            <option value="{{\App\Enums\NewsStatus::INACTIVE}}">INACTIVE</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Create</button>
            </form>
        </div>
    </section>
@endsection