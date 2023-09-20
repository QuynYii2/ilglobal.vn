@extends('frontend.layouts.master')
@section('title', 'Home page')
@section('main-content')
  
  <main id="main">
    <!-- ======= Contact Section ======= -->
    @if($configs)
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div>
            <iframe src="{{$configs->location}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->
          <div class="row gy-4 mt-4 mb-4">
            <div class="col-lg-4">
              <div class="info-item d-flex">
                <i class="fa-solid fa-location-dot"></i>
                <div>
                  <h4>{{ __('home.Location') }}:</h4>
                  <p>{{$configs->address}}</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="fa-solid fa-envelope"></i>
                <div>
                  <h4>Email:</h4>
                  <p>{{$configs->email}}</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="fa-solid fa-phone-volume"></i>
                <div>
                  <h4>Phone:</h4>
                  <p>{{$configs->phone}}</p>
                </div>
              </div><!-- End Info Item -->

            </div>

            <div class="col-lg-8">
              <form action="{{route('create.contact')}}" method="post">
                @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="text-center"><button class="btn btn-primary" type="submit">Send Message</button></div>
              </form>
            </div><!-- End Contact Form -->

          </div>

        </div>
      </section><!-- End Contact Section -->
    @endif
  </main><!-- End #main -->
@endsection
  <!-- Vendor JS Files -->
  <script src="scss/vendor/purecounter/purecounter_vanilla.js"></script>

