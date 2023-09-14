@extends('admin.layouts.master')

@section('title', 'Admin Create News')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">Home</a></li>
                <li class="breadcrumb-item active">Create Menu</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="inputState">Choose key...</label>
                <select id="inputState" class="form-select inputState">
                    <option value="default">-- Default --</option>
                    <option value="category">Category</option>
                    <option value="page">Page</option>
                </select>
            </div>
            <form id="content-form-default" class="" method="post" action="{{route('admin.menu.create')}}"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="location">Choose location...</label>
                        <select id="location" class="form-select" name="location">
                            <option value="header">Header</option>
                            <option value="footer">Footer</option>
                        </select>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="title_vi">Menu Title (VI)</label>
                            <input class="form-control" type="text" id="title_vi" name="title_vi" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="title_en">Menu Title (EN)</label>
                            <input class="form-control" type="text" id="title_en" name="title_en" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="url">URL</label>
                            <input class="form-control" type="text" id="url" name="url" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="selectStatus">Select status</label>
                            <select class="form-select" id="selectStatus" name="status">
                                <option value="{{\App\Enums\MenuStatus::ACTIVE}}">ACTIVE</option>
                                <option value="{{\App\Enums\MenuStatus::INACTIVE}}">INACTIVE</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input id="key" type="text" class="d-none" name="key" value="default">
                <button type="submit" class="btn btn-primary mt-3">Create</button>
            </form>
            <form method="post" id="content-form-category" class="d-none" action="{{route('admin.menu.create')}}"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="location">Choose location...</label>
                        <select id="location" class="form-select" name="location">
                            <option value="header">Header</option>
                            <option value="footer">Footer</option>
                        </select>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="title_vi">Menu Title (VI)</label>
                            <input class="form-control" type="text" id="title_vi" name="title_vi" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="title_en">Menu Title (EN)</label>
                            <input class="form-control" type="text" id="title_en" name="title_en" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="url">URL</label>
                            <select id="url" class="form-select" name="url">
                                @if($categories->isNotEmpty())
                                    @foreach($categories as $category)
                                        <option value="{{route('admin.category.edit', $category->id)}}">{{$category->name_vi}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="selectStatus">Select status</label>
                            <select class="form-select" id="selectStatus" name="status">
                                <option value="{{\App\Enums\MenuStatus::ACTIVE}}">ACTIVE</option>
                                <option value="{{\App\Enums\MenuStatus::INACTIVE}}">INACTIVE</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input id="key" type="text" class="d-none" name="key" value="category">
                <button type="submit" class="btn btn-primary mt-3">Create</button>
            </form>
            <form id="content-form-page" class="d-none" method="post" action="{{route('admin.menu.create')}}"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="location">Choose location...</label>
                        <select id="location" class="form-select" name="location">
                            <option value="header">Header</option>
                            <option value="footer">Footer</option>
                        </select>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="title_vi">Menu Title (VI)</label>
                            <input class="form-control" type="text" id="title_vi" name="title_vi" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="title_en">Menu Title (EN)</label>
                            <input class="form-control" type="text" id="title_en" name="title_en" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="url">URL</label>
                            <select id="url" class="form-select" name="url">
                                @if($pages->isNotEmpty())
                                    @foreach($pages as $page)
                                        <option value="{{route('admin.pages.edit', $page->id)}}">{{$page->title_vi}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="selectStatus">Select status</label>
                            <select class="form-select" id="selectStatus" name="status">
                                <option value="{{\App\Enums\MenuStatus::ACTIVE}}">ACTIVE</option>
                                <option value="{{\App\Enums\MenuStatus::INACTIVE}}">INACTIVE</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input id="key" type="text" class="d-none" name="key" value="page">
                <button type="submit" class="btn btn-primary mt-3">Create</button>
            </form>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#inputState').on('change', function () {
                let item = $(this).val();
                switch (item) {
                    case 'category':
                        $('#content-form-default').addClass('d-none')
                        $('#content-form-category').removeClass('d-none')
                        $('#content-form-page').addClass('d-none')
                        break;
                    case 'page':
                        $('#content-form-default').addClass('d-none')
                        $('#content-form-category').addClass('d-none')
                        $('#content-form-page').removeClass('d-none')
                        break;
                    default:
                        $('#content-form-default').removeClass('d-none')
                        $('#content-form-category').addClass('d-none')
                        $('#content-form-page').addClass('d-none')
                        break;
                }
            })
        })
    </script>
@endsection