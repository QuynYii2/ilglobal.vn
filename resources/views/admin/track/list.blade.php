@extends('admin.layouts.master')

@section('title', 'Admin List Track')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">{{ __('home.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('home.List Track&Trace') }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="mb-3">
                <h5>{{ __('home.Search') }}</h5>
                <input class="form-control" id="inputSearchTrack" type="text" placeholder="{{ __('home.Search') }}">
                <br>
            </div>
            <table class="table table-bordered" id="tableTrack&Trace">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">URL</th>
                    <th scope="col">{{ __('home.Status') }}</th>
                    <th scope="col">{{ __('home.Action') }}</th>
                </tr>
                </thead>
                <tbody>
                @if(!$listTrack->isEmpty())
                    @foreach($listTrack as $cate)
                        <tr>
                            <th scope="row">{{$loop->index + 1}}</th>
                            <td>
                                @if($cate->thumbnail)
                                    <img src="{{$cate->thumbnail}}" alt="" width="60px" height="60px">
                                @endif
                            </td>
                            <td>{{$cate->url}}</td>
                            <td id="tableTrack{{$cate->id}}">{{$cate->status}}</td>
                            <td>
                                <a href="{{route('admin.track.edit', $cate->id)}}">
                                    <i style="color: black" class="bi bi-pencil-square"></i>
                                </a>
                                <button type="button" class="delete-button" data-bs-toggle="modal"
                                        data-bs-target="#modalDelete{{$cate->id}}"><i class="bi bi-trash-fill"></i>
                                </button>
                                <div class="modal fade" id="modalDelete{{$cate->id}}" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{route('admin.category.delete', $cate->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">{{ __('home.Confirm Delete') }}</h5>
                                                    <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {{ __('home.Are you sure you want to delete it?') }}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">{{ __('home.Close') }}
                                                    </button>
                                                    <button type="submit" class="btn btn-danger">{{ __('home.Delete') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#inputSearchTrack").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#tableTrack tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection