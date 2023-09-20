@extends('frontend.layouts.master')
@section('title', 'Home page')
@section('main-content')

  <main id="main">
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        @include('frontend.layouts.shared.about_us')
      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          @if($configs)
            <span>{{$configs->name_company}}</span>
            <h2>{{$configs->name_company}}</h2>
          @endif

        </div>

        <div class="introduce">
            @if($configs)
              @if(app()->getLocale() == 'vi')
                {!! ($configs->introduce_vi) !!}
              @else
              {!! ($configs->introduce_en) !!}
              @endif
            @endif
        </div>
      </div>
    </section><!-- End Our Team Section -->


  </main><!-- End #main -->
@endsection
<script >
  document.addEventListener('DOMContentLoaded', () => {
    new PureCounter();
  })
</script>