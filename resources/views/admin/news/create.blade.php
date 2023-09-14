@extends('admin.layouts.master')

@section('title', 'Admin Create News')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.homepage')}}">Home</a></li>
                <li class="breadcrumb-item active">Create News</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <form method="post" action="{{route('admin.news.create')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="title">News Title (VI)</label>
                        <input type="text" class="form-control" name="title_vi" id="title_vi" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="title">News Title (EN)</label>
                        <input type="text" class="form-control" name="title_en" id="title_en" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="thumbnail">Choose thumbnail</label>
                        <input class="form-control" type="file" id="thumbnail" name="thumbnail" required
                               accept="image/*">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="selectStatus">Select status</label>
                        <select class="form-select" id="selectStatus" name="status">
                            <option value="{{\App\Enums\NewsStatus::ACTIVE}}">ACTIVE</option>
                            <option value="{{\App\Enums\NewsStatus::INACTIVE}}">INACTIVE</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="name">Choose Category</label>
                        @php
                            $categories = \Illuminate\Support\Facades\DB::table('categories')->where('parent_id', null)->get();
                        @endphp
                        <div id="checkboxes">
                            @foreach($categories as $category)
                                <label class="category" for="category-{{$category->id}}">
                                    <input type="checkbox" id="category-{{$category->id}}"
                                           name="category[]"
                                           value="{{$category->id}}"
                                           class="inputCheckboxCategory mr-2 p-3"/>
                                    <span class="labelCheckboxCategory">{{($category->name_vi)}}</span>
                                </label>
                                @if(!$categories->isEmpty())
                                    @php
                                        $categories = \Illuminate\Support\Facades\DB::table('categories')->where('parent_id', $category->id)->get();
                                    @endphp
                                    @foreach($categories as $child)
                                        <label class="category-child" for="category-{{$child->id}}">
                                            <input type="checkbox" id="category-{{$child->id}}"
                                                   name="category[]"
                                                   value="{{$child->id}}"
                                                   class="inputCheckboxCategory mr-2 p-3"/>
                                            <span class="labelCheckboxCategory">{{($child->name_vi)}}</span>
                                        </label>
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="short_content">Short Content (VI)</label>
                    <textarea type="text" class="form-control description" name="short_content_vi"
                              id="short_content_vi"
                              placeholder="Enter short description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="short_content">Short Content (EN)</label>
                    <textarea type="text" class="form-control description" name="short_content_en"
                              id="short_content_en"
                              placeholder="Enter short description" ></textarea>
                </div>
                <div class="form-group">
                    <label for="content">Content (VI)</label>
                    <textarea type="text" class="form-control description" name="content_vi" id="content_vi"
                              placeholder="Enter description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="content">Content (EN)</label>
                    <textarea type="text" class="form-control description" name="content_en" id="content_en"
                              placeholder="Enter description" ></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Create</button>
            </form>
        </div>
    </section>
@endsection