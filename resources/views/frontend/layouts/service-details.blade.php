@extends('frontend.layouts.master')
@section('title', 'Home page')
@section('main-content')

  <main id="main">
    <!-- ======= Service Details Section ======= -->
    <div id="service-details" class="service-details">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <span>{{ __('home.News') }}</span>
          <h2>{{ __('home.News') }}</h2>
        </div>

        <div class="row gy-4">
          <div class="col-lg-3">
            <div class="services-list">
              <a href="{{route('service-details', $productDetail->id)}}" class="active">
                @if(app()->getLocale() == 'vi')
                  {{$productDetail->title_vi}}
                @else
                  {{$productDetail->title_en}}
                @endif
                </a>
              @foreach($categories as $category)
                <a href="{{route('service-details', $category->id)}}">
                  @if(app()->getLocale() == 'vi')
                    {{$category->title_vi}}
                  @else
                    {{$category->title_en}}
                  @endif
                </a>
              @endforeach
            </div>
          </div>

          <div class="col-lg-9">
            <h3 class="mb-3">
              @if(app()->getLocale() == 'vi')
                {{$productDetail->title_vi}}
              @else
                {{$productDetail->title_en}}
              @endif
            </h3>
            <img src="{{$productDetail->thumbnail}}" alt="" class="mb-3" style="width: 100%">
            <p>
              @if(app()->getLocale() == 'vi')
                {{$productDetail->short_content_vi}}
              @else
                {{$productDetail->short_content_en}}
              @endif
            </p>
            <p>
              @if(app()->getLocale() == 'vi')
                {!! ($productDetail->content_vi) !!}
              @else
                {!! ($productDetail->content_en) !!}
              @endif
            </p>
          </div>

        </div>

      </div>
    </div><!-- End Service Details Section -->

  </main><!-- End #main -->
@endsection
{{--  <div id="preloader"></div>--}}

  <!-- Vendor JS Files -->
  <script src="scss/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="scss/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="scss/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="scss/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="scss/vendor/aos/aos.js"></script>
  <script src="scss/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="scss/js/main.js"></script>
