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
                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
                        @if($configs)
                            <img src="{{asset($configs->avatar)}}" class="img-fluid" alt="">
                        @endif
                    </div>
                    <div class="col-lg-6 content order-last  order-lg-first">
                        <h3>{{ __('Home.About Us') }}</h3>
                        <p>
                            @if($configs)
                                {{$configs->short_introduction_vi}}
                            @endif
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Featured Services Section ======= -->
        @foreach($cate as $item)
            @if($item->check == 1 && !$item->parent_id)
                <section id="featured-services" class="featured-services">
                    <div class="container">
                        <h2>{{$item->name_vi}}</h2>
                        <div class="row gy-4">
                            @php
                                $item_child = \App\Models\Category::where('parent_id', $item->id)->get();
                            @endphp
                            @foreach($item_child as $child)
                                <a href="#" class="col-lg-4 col-md-6 service-item text-center" data-aos="fade-up">
                                    <div class="icon"><img src="{{asset($child->thumbnail)}}" alt=""></div>
                                    <div>
                                        <h4 class="title">{{$child->name_vi}}</h4>
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
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="fa-solid fa-arrow-up"></i></a>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', () => {
        new PureCounter();
    })
</script>
