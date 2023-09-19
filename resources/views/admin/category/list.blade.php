@extends('admin.layouts.master')

@section('title', 'Admin List Category')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">{{ __('Home.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('Home.List Category') }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="mb-3">
                <h5>{{ __('Home.Search') }}</h5>
                <input class="form-control" id="inputSearchNews" type="text" placeholder="{{ __('Home.Search') }}">
                <br>
            </div>
            <table class="table table-bordered" id="tableNews">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">{{ __('Home.Name') }}</th>
                    <th scope="col">{{ __('Home.Category Parent') }}</th>
                    <th scope="col">Check</th>
                    <th scope="col">{{ __('Home.Status') }}</th>
                    <th scope="col">{{ __('Home.Action') }}</th>
                </tr>
                </thead>
                <tbody>
                @if(!$listCategory->isEmpty())
                    @foreach($listCategory as $cate)
                        <tr>
                            <th scope="row">{{$loop->index + 1}}</th>
                            <td>
                                @if($cate->thumbnail)
                                    <img src="{{$cate->thumbnail}}" alt="" width="60px" height="60px">
                                @endif
                            </td>
                            <td>{{$cate->name_vi}}</td>
                            @if($cate->parent_id)
                                @php
                                    $parent_cate = \App\Models\Category::find($cate->parent_id);
                                @endphp
                                <td>{{$parent_cate->name_vi}}</td>
                            @else
                                <td>--</td>
                            @endif
                            <td>
                                @if($cate->check == 1)
                                    {{ __('Home.Show') }}
                                @else
                                    {{ __('Home.Hidden') }}
                                @endif
                            </td>
                            <td id="newsStatus{{$cate->id}}">{{$cate->status}}</td>
                            <td>
                                <a href="{{route('admin.category.edit', $cate->id)}}">
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
                let $newsID = $(this).data('id');

                function setProduct($newsID) {
                    $.ajax({
                        url: '/admin/news/toggle/' + $newsID,
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            let status = document.getElementById('newsStatus' + $newsID)
                            status.innerText = response['status'];
                        },
                        error: function (exception) {
                            console.log(exception)
                        }
                    });
                }

                setProduct($newsID);
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