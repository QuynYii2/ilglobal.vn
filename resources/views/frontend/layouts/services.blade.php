@extends('frontend.layouts.master')
@section('title', 'Home page')
@section('main-content')
  <main id="main">

    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <span>{{ __('home.News') }}</span>
          <h2>{{ __('home.News') }}</h2>
        </div>
        <div class="row gy-4">
          @foreach($news as $new)
          <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="{{$new->thumbnail}}" alt="" class="img-fluid">
              </div>
              <div class="title">
                <a href="{{route('service-details', $new->id)}}"
                     class="stretched-link">{{strip_tags($new->title_vi)}}</a></div>
              <p>{{strip_tags($new->short_content_vi)}}</p>
            </div>
          </div>
          @endforeach<!-- End Card Item -->
        </div>

      </div>
    </section><!-- End Services Section -->
  </main><!-- End #main -->
@endsection