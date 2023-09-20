@extends('frontend.layouts.master')
@section('title', 'Home page')
@section('main-content')
    <!-- ======= Hero Section ======= -->
    <!-- End Hero Section -->
    <!-- #main -->
    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                @include('frontend.layouts.shared.about_us')
            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Featured Services Section ======= -->
        @foreach($cate as $item)
            @if($item->check == 1 && !$item->parent_id)
                <section id="featured-services" class="featured-services">
                    <div class="container">
                        <h2>
                            @if(app()->getLocale() == 'vi')
                                {{$item->name_vi}}
                            @else
                                {{$item->name_en}}
                            @endif
                        </h2>
                        <div class="row gy-4">
                            @php
                                $item_child = \App\Models\Category::where('parent_id', $item->id)->get();
                            @endphp
                            @foreach($item_child as $child)
                                <a href="#" class="col-lg-4 col-md-6 service-item text-center" data-aos="fade-up">
                                    <div class="icon"><img src="{{asset($child->thumbnail)}}" alt=""></div>
                                    <div>
                                        <h4 class="title">
                                            @if(app()->getLocale() == 'vi')
                                                {{$child->name_vi}}
                                            @else
                                                {{$child->name_en}}
                                            @endif
                                        </h4>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </section><!-- End Featured Services Section -->
            @endif
        @endforeach
    </main>
    <!-- End #main -->
@endsection
<script>
    document.addEventListener('DOMContentLoaded', () => {
        new PureCounter();
    })
</script>
