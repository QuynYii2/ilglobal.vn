@extends('admin.layouts.master')

@section('title', 'Admin List News')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">{{ __('home.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('home.List News') }}</li>
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
                    <th scope="col">{{ __('home.News Title') }}</th>
                    <th scope="col">{{ __('home.Category') }}</th>
                    <th scope="col">{{ __('home.Views') }}</th>
                    <th scope="col">{{ __('home.Create By') }}</th>
                    <th scope="col">{{ __('home.Create At') }}</th>
                    <th scope="col">{{ __('home.Active') }}</th>
                    <th scope="col">{{ __('home.Status') }}</th>
                    <th scope="col">{{ __('home.Action') }}</th>
                </tr>
                </thead>
                <tbody>
                @if(!$listNews->isEmpty())
                    @foreach($listNews as $news)
                        <tr>
                            <th scope="row">{{$loop->index + 1}}</th>
                            <td>
                                <img src="{{$news->thumbnail}}" alt="" width="60px" height="60px">
                            </td>
                            <td>{{$news->title_vi}}</td>
                            @php
                                $listCate = $news->category_vi;
                                $cates = explode(',', $listCate);
                            @endphp
                            <td>
                            @foreach($cates as $cate)
                                @php
                                    $category = \App\Models\Category::find($cate);
                                @endphp
                            <span>{{$category->name_vi}}</span>,</br>
                            @endforeach
                            </td>
                            <td class="text-center">{{$news->views}}</td>
                            <td>{{$news->user->name}}</td>
                            <td>{{$news->created_at}}</td>
                            <td class="text-center">
                                @php
                                    $isChecked = false;
                                    if ($news->status == \App\Enums\NewsStatus::ACTIVE){
                                        $isChecked = true;
                                    }
                                @endphp
                                <input data-id="{{$news->id}}" type="checkbox"
                                       class="form-check-input toggleNews"
                                       id="exampleCheck{{$news->id}}" {{ $isChecked ? 'checked' : '' }}>
                            </td>
                            <td id="newsStatus{{$news->id}}">{{$news->status}}</td>
                            <td class="text-center">
                                <a href="{{route('admin.news.edit', $news->id)}}">
                                    <i style="color: black" class="bi bi-pencil-square"></i>
                                </a>
                                <button type="button" class="delete-button" data-bs-toggle="modal"
                                        data-bs-target="#modalDelete{{$news->id}}"><i class="bi bi-trash-fill"></i>
                                </button>
                                <div class="modal fade" id="modalDelete{{$news->id}}" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{route('admin.news.delete', $news->id)}}" method="post">
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