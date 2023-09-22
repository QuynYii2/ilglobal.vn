@extends('admin.layouts.master')

@section('title', 'Admin Create News')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">{{ __('home.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('home.Create News') }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form method="post" action="{{route('admin.news.create')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="title">{{ __('home.News Title') }} (VI)</label>
                        <input type="text" class="form-control" name="title_vi" id="title_vi" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="title">{{ __('home.News Title') }} (EN)</label>
                        <input type="text" class="form-control" name="title_en" id="title_en" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="thumbnail">{{ __('home.Choose thumbnail') }}</label>
                        <input class="form-control" type="file" id="thumbnail" name="thumbnail" required
                               accept="image/*">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="selectStatus">{{ __('home.Select status') }}</label>
                        <select class="form-select" id="selectStatus" name="status">
                            <option value="{{\App\Enums\NewsStatus::ACTIVE}}">{{ __('home.ACTIVE') }}</option>
                            <option value="{{\App\Enums\NewsStatus::INACTIVE}}">{{ __('home.INACTIVE') }}</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="name">{{ __('home.Choose Category') }}</label>
                        @php
                            $categories = \Illuminate\Support\Facades\DB::table('categories')->where('parent_id', null)->get();
                        @endphp
                        @if($categories->isNotEmpty())
                        <div id="checkboxes">
                                @foreach($categories as $category)
                                    <label class="category" for="category-{{$category->id}}">
                                        <input type="checkbox" id="category-{{$category->id}}"
                                               name="category[]"
                                               value="{{$category->id}}"
                                               class="inputCheckboxCategory mr-2 p-3" required/>
                                        <span class="labelCheckboxCategory">
                                            @if(app()->getLocale() == 'vi')
                                                {{$category->name_vi}}
                                            @else
                                                {{$category->name_en}}
                                            @endif
                                        </span>
                                    </label>
                                    @if(!$categories->isEmpty())
                                        @php
                                            $listChild = \Illuminate\Support\Facades\DB::table('categories')->where('parent_id', $category->id)->get();
                                        @endphp
                                        @foreach($listChild as $child)
                                            <label class="category-child mr-2" for="category-{{$child->id}}">
                                                <input type="checkbox" id="category-{{$child->id}}"
                                                       name="category[]"
                                                       value="{{$child->id}}"
                                                       class="inputCheckboxCategory mr-2 p-3"/>
                                                <span class="labelCheckboxCategory">
                                                    @if(app()->getLocale() == 'vi')
                                                        {{$child->name_vi}}
                                                    @else
                                                        {{$child->name_en}}
                                                    @endif
                                                </span>
                                            </label>
                                        @endforeach
                                    @endif
                                @endforeach
                        </div>
                        @else
                            <div>
                                <input class="form-control" type="text" disabled>
                                <div style="color: red; font-size: 14px; margin-top: 5px">{{ __('home.Please create a category') }}</div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="short_content">{{ __('home.Short Content') }} (VI)</label>
                    <textarea type="text" class="form-control" name="short_content_vi"
                              id="short_content_vi"
                              placeholder="{{ __('home.Enter short description') }}" required></textarea>
                </div>
                <div class="form-group">
                    <label for="short_content">{{ __('home.Short Content') }} (EN)</label>
                    <textarea type="text" class="form-control" name="short_content_en"
                              id="short_content_en"
                              placeholder="{{ __('home.Enter short description') }}" ></textarea>
                </div>
                <div class="form-group">
                    <label for="content">{{ __('home.Content') }} (VI)</label>
                    <textarea type="text" class="form-control description" name="content_vi" id="content_vi"
                              placeholder="{{ __('home.Enter description') }}" required></textarea>
                </div>
                <div class="form-group">
                    <label for="content">{{ __('home.Content') }} (EN)</label>
                    <textarea type="text" class="form-control description" name="content_en" id="content_en"
                              placeholder="{{ __('home.Enter description') }}" ></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">{{ __('home.Create') }}</button>
            </form>
        </div>
    </section>
@endsection