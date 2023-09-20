@extends('admin.layouts.master')

@section('title', 'Admin Create News')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">{{ __('home.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('home.Create Menu') }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="inputState">{{ __('home.Choose key...') }}</label>
                <select id="inputState" class="form-select inputState">
                    <option value="default">{{ __('home.-- Default --') }}</option>
                    <option value="category">{{ __('home.Category') }}</option>
                    <option value="page">{{ __('home.Pages') }}</option>
                </select>
            </div>
            <form id="content-form-default" class="" method="post" action="{{route('admin.menu.create')}}"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="location">{{ __('home.Show') }}</label>
                        <select id="location" class="form-select" name="location">
                            <option value="header">{{ __('home.Header') }}</option>
                            <option value="footer">{{ __('home.Footer') }}</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="arrange">{{ __('home.Choose location...') }}</label>
                        <input class="form-control" type="number" id="arrange" name="arrange" required>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="title_vi">{{ __('home.Menu Title') }} (VI)</label>
                            <input class="form-control" type="text" id="title_vi" name="title_vi" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="title_en">{{ __('home.Menu Title') }} (EN)</label>
                            <input class="form-control" type="text" id="title_en" name="title_en" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="url">{{ __('home.URL') }}</label>
                            <input class="form-control" type="text" id="url" name="url" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="selectStatus">{{ __('home.Select status') }}</label>
                            <select class="form-select" id="selectStatus" name="status">
                                <option value="{{\App\Enums\MenuStatus::ACTIVE}}">{{ __('home.ACTIVE') }}</option>
                                <option value="{{\App\Enums\MenuStatus::INACTIVE}}">{{ __('home.INACTIVE') }}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input id="key" type="text" class="d-none" name="key" value="default">
                <button type="submit" class="btn btn-primary mt-3">{{ __('home.Create') }}</button>
            </form>
            <form method="post" id="content-form-category" class="d-none" action="{{route('admin.menu.create')}}"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="location">{{ __('home.Choose location...') }}</label>
                        <select id="location" class="form-select" name="location">
                            <option value="header">{{ __('home.Header') }}</option>
                            <option value="footer">{{ __('home.Footer') }}</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="arrange">{{ __('home.Choose location...') }}</label>
                        <input class="form-control" type="number" id="arrange" name="arrange" required>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="title_vi">{{ __('home.Menu Title') }} (VI)</label>
                            <input class="form-control" type="text" id="title_vi" name="title_vi" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="title_en">{{ __('home.Menu Title') }} (EN)</label>
                            <input class="form-control" type="text" id="title_en" name="title_en" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="url">{{ __('home.URL') }}</label>
                            <select id="url" class="form-select" name="url">
                                @if($categories->isNotEmpty())
                                    @foreach($categories as $category)
                                        <option value="{{$category->id)}}">{{$category->name_vi}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="selectStatus">{{ __('home.Select status') }}</label>
                            <select class="form-select" id="selectStatus" name="status">
                                <option value="{{\App\Enums\MenuStatus::ACTIVE}}">{{ __('home.ACTIVE') }}</option>
                                <option value="{{\App\Enums\MenuStatus::INACTIVE}}">{{ __('home.INACTIVE') }}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input id="key" type="text" class="d-none" name="key" value="category">
                <button type="submit" class="btn btn-primary mt-3">{{ __('home.Create') }}</button>
            </form>
            <form id="content-form-page" class="d-none" method="post" action="{{route('admin.menu.create')}}"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="location">{{ __('home.Choose location...') }}</label>
                        <select id="location" class="form-select" name="location">
                            <option value="header">{{ __('home.Header') }}</option>
                            <option value="footer">{{ __('home.Footer') }}</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="arrange">{{ __('home.Choose location...') }}</label>
                        <input class="form-control" type="number" id="arrange" name="arrange" required>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="title_vi">{{ __('home.Menu Title') }} (VI)</label>
                            <input class="form-control" type="text" id="title_vi" name="title_vi" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="title_en">{{ __('home.Menu Title') }} (EN)</label>
                            <input class="form-control" type="text" id="title_en" name="title_en" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="url">{{ __('home.URL') }}</label>
                            <select id="url" class="form-select" name="url">
                                @if($pages->isNotEmpty())
                                    @foreach($pages as $page)
                                        <option value="{{$page->id)}}">{{$page->title_vi}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="selectStatus">{{ __('home.Select status') }}</label>
                            <select class="form-select" id="selectStatus" name="status">
                                <option value="{{\App\Enums\MenuStatus::ACTIVE}}">{{ __('home.ACTIVE') }}</option>
                                <option value="{{\App\Enums\MenuStatus::INACTIVE}}">{{ __('home.INACTIVE') }}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input id="key" type="text" class="d-none" name="key" value="page">
                <button type="submit" class="btn btn-primary mt-3">{{ __('home.Create') }}</button>
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