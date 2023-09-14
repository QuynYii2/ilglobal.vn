@extends('admin.layouts.master')

@section('title', 'Admin List News')

@section('content')

    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active">List Banners</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="mb-3">
                <h5>Search News</h5>
                <input class="form-control" id="inputSearchNews" type="text" placeholder="Search..">
                <br>
            </div>
            <table class="table table-bordered" id="tableNews">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Banner Image</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bannerImages as $bannerImage)
                    <tr>
                        <td>{{$bannerImage -> id}}</td>
                        <td>{{$bannerImage -> bannerImage}}</td>
                        <td>{{$bannerImage -> created_at}}</td>
                        <td>{{$bannerImage -> updated_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection