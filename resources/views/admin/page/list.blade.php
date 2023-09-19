@extends('admin.layouts.master')

@section('title', 'Admin List News')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">{{ __('Home.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('Home.List Pages') }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="mb-3">
                <h5>Search Pages</h5>
                <input class="form-control" id="inputSearchNews" type="text" placeholder="{{ __('Home.Search') }}..">
                <br>
            </div>
            <table class="table table-bordered" id="tableNews">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('Home.News Title') }}</th>
                    <th scope="col">{{ __('Home.Views') }}</th>
                    <th scope="col">{{ __('Home.Create By') }}</th>
                    <th scope="col">{{ __('Home.Create At') }}</th>
                    <th scope="col">{{ __('Home.Active') }}</th>
                    <th scope="col">{{ __('Home.Status') }}</th>
                    <th scope="col">{{ __('Home.Action') }}</th>
                </tr>
                </thead>
                <tbody>
                @if(!$listPages->isEmpty())
                    @foreach($listPages as $pages)
                        <tr>
                            <th scope="row">{{$loop->index + 1}}</th>
                            <td>{{$pages->title_vi}}</td>
                            <td class="text-center">{{$pages->views}}</td>
                            <td>{{$pages->user->name}}</td>
                            <td>{{$pages->created_at}}</td>
                            <td class="text-center">
                                @php
                                    $isChecked = false;
                                    if ($pages->status == \App\Enums\NewsStatus::ACTIVE){
                                        $isChecked = true;
                                    }
                                @endphp
                                <input data-id="{{$pages->id}}" type="checkbox"
                                       class="form-check-input toggleNews"
                                       id="exampleCheck{{$pages->id}}" {{ $isChecked ? 'checked' : '' }}>
                            </td>
                            <td id="newsStatus{{$pages->id}}">{{$pages->status}}</td>
                            <td class="text-center">
                                <a href="{{route('admin.pages.edit', $pages->id)}}">
                                    <i style="color: black" class="bi bi-pencil-square"></i>
                                </a>
                                <button type="button" class="delete-button" data-bs-toggle="modal"
                                        data-bs-target="#modalDelete{{$pages->id}}"><i class="bi bi-trash-fill"></i>
                                </button>
                                <div class="modal fade" id="modalDelete{{$pages->id}}" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{route('admin.pages.delete', $pages->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Home.Confirm Delete') }}</h5>
                                                    <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {{ __('Home.Are you sure you want to delete it?') }}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">{{ __('Home.Close') }}
                                                    </button>
                                                    <button type="submit" class="btn btn-danger">{{ __('Home.Delete') }}
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
            $('.toggleNews').on('click', function () {
                let $pagesID = $(this).data('id');

                function setProduct($pagesID) {
                    $.ajax({
                        url: '/admin/news/toggle/' + $pagesID,
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            let status = document.getElementById('newsStatus' + $pagesID)
                            status.innerText = response['status'];
                        },
                        error: function (exception) {
                            console.log(exception)
                        }
                    });
                }

                setProduct($pagesID);
            })
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#inputSearchCategory").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#tableCategory tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection