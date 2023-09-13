@extends('admin.layouts.master')

@section('title', 'Admin List Category')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">Home</a></li>
                <li class="breadcrumb-item active">List Category</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="mb-3">
                <h5>Search Category</h5>
                <input class="form-control" id="inputSearchNews" type="text" placeholder="Search..">
                <br>
            </div>
            <table class="table table-bordered" id="tableNews">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category Parent</th>
                    <th scope="col">Active</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(!$listCategory->isEmpty())
                    @foreach($listCategory as $cate)
                        <tr>
                            <th scope="row">{{$loop->index + 1}}</th>
                            <td>{{$cate->name_vi}}</td>
                            @if($cate->parent_id)
                                @php
                                    $parent_cate = \App\Models\Category::find($cate->parent_id);
                                @endphp
                                <td>{{$parent_cate->name_vi}}</td>
                            @else
                                <td>--</td>
                            @endif
                            <td class="text-center">
                                @php
                                    $isChecked = false;
                                    if ($cate->status == \App\Enums\CategoryStatus::ACTIVE){
                                        $isChecked = true;
                                    }
                                @endphp
                                <input data-id="{{$cate->id}}" type="checkbox"
                                       class="form-check-input toggleNews"
                                       id="exampleCheck{{$cate->id}}" {{ $isChecked ? 'checked' : '' }}>
                            </td>
                            <td id="newsStatus{{$cate->id}}">{{$cate->status}}</td>
                            <td class="text-center">
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
                                                    <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                                                    <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete it?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close
                                                    </button>
                                                    <button type="submit" class="btn btn-danger">Delete
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