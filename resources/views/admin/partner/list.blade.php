@extends('admin.layouts.master')

@section('title', 'Admin List Partners')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">{{ __('home.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('home.List Partners') }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="mb-3">
                <h5>{{ __('home.Search') }}</h5>
                <input class="form-control" id="inputSearchNews" type="text" placeholder="{{ __('home.Search') }}..">
                <br>
            </div>
            <table class="table table-bordered" id="tableNews">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">{{ __('home.Name') }}</th>
                    <th scope="col">{{ __('home.URL') }}</th>
                    <th scope="col">{{ __('home.Status') }}</th>
                    <th scope="col">{{ __('home.Action') }}</th>
                </tr>
                </thead>
                <tbody>
                @if(!$partners->isEmpty())
                    @foreach($partners as $partner)
                        <tr>
                            <th scope="row">{{$loop->index + 1}}</th>
                            <td>
                                <img src="{{ asset($partner->thumbnail) }}" alt="" width="60px" height="60px">
                            </td>
                            <td>{{$partner->name}}</td>
                            <td>
                            <a href="{{$partner->link}}">{{$partner->link}}</a>
                            </td>
                            <td id="newsStatus{{$partner->id}}">{{$partner->status}}</td>
                            <td class="text-center">
                                <a href="{{route('admin.partner.detail', $partner->id)}}">
                                    <i style="color: black" class="bi bi-pencil-square"></i>
                                </a>
                                <button type="button" class="delete-button" data-bs-toggle="modal"
                                        data-bs-target="#modalDelete{{$partner->id}}"><i class="bi bi-trash-fill"></i>
                                </button>
                                <div class="modal fade" id="modalDelete{{$partner->id}}" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{route('admin.partner.delete', $partner->id)}}" method="post">
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
            $("#inputSearchNews").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#tableNews tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection