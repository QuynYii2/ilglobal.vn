@extends('admin.layouts.master')

@section('title', 'Admin List News')

@section('content')

    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">{{ __('home.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('home.List Banners') }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="mb-3">
                <h5>{{ __('home.Search') }}</h5>
                <input class="form-control" id="inputSearchNews" type="text" placeholder="{{ __('home.Search') }}">
                <br>
            </div>
            <table class="table table-bordered" id="tableNews">
                <thead>
                <tr>
                    <th scope="col">{{ __('home.ID') }}</th>
                    <th scope="col">{{ __('home.Banner Image') }}</th>
                    <th scope="col">{{ __('home.Created At') }}</th>
                    <th scope="col">{{ __('home.Updated At') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bannerImages as $bannerImage)
                    <tr>
                        <td>{{$bannerImage -> id}}</td>
                        <td>{{$bannerImage -> bannerImage}}</td>
                        <td>{{$bannerImage -> created_at}}</td>
                        <td>{{$bannerImage -> updated_at}}</td>
                        <td>
                            <!-- Nút Sửa -->
                            <a href="{{ route('admin.banner.edit', $bannerImage->id) }}" class="btn btn-primary">Sửa</a>

                            <!-- Nút Xóa -->
                            <form action="{{route('delete.banner', $bannerImage->id)}}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection