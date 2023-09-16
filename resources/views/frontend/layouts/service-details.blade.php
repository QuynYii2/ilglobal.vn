@extends('frontend.layouts.master')
@section('title', 'Home page')
@section('main-content')

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('scss/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Service Details</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{route('index')}}">Home</a></li>
            <li>Service Details</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="services-list">
              <a href="#" class="active">Storage</a>
              <a href="#">Logistics</a>
              <a href="#">Cargo</a>
              <a href="#">Trucking</a>
              <a href="#">Packaging</a>
              <a href="#">Warehousing</a>
            </div>
            <h4>Enim qui eos rerum in delectus</h4>
            <p>Nam voluptatem quasi numquam quas fugiat ex temporibus quo est. Quia aut quam quod facere ut non occaecati ut aut. Nesciunt mollitia illum tempore corrupti sed eum reiciendis. Maxime modi rerum.</p>
          </div>

          <div class="col-lg-8">
            <img src="{{$productDetail->thumbnail}}" alt="" class="img-fluid services-img">
            <h3>{{$productDetail->title_vi}}</h3>
            <p>
              {{$productDetail->short_content_vi}}
            </p>
            <p>
              {{$productDetail->content_vi}}
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Service Details Section -->

  </main><!-- End #main -->


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="fa-solid fa-arrow-up"></i></a>
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
