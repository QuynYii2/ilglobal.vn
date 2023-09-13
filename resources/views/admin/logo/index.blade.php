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
            <form method="post" action="{{route('admin.logo.create')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="thumbnail">Choose logo</label>
                        <input class="form-control" type="file" id="thumbnail" name="$email" required
                               accept="image/*">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="phone_number">PhoneNumber</label>
                        <input class="form-control" type="text" id="phone_number" name="phone_number" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="cskh">CSKH</label>
                        <input class="form-control" type="text" id="cskh" name="cskh" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="zalo">Zalo</label>
                        <input class="form-control" type="text" id="zalo" name="zalo" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="facebook">Facebook</label>
                        <input class="form-control" type="text" id="facebook" name="facebook" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="address">Address</label>
                        <input class="form-control" type="text" id="address" name="address" required>
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