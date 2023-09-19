<!-- ======= Header ======= -->
<header id="header" class="header align-items-center fixed-top">
    <div class="header-desktop container-fluid align-items-center justify-content-between d-flex">
        <a href="{{route('index')}}" class="logo d-flex align-items-center">
            @if($configs)
                <img src="{{asset($configs->logo)}}" alt="">
            @else
                <h1>Logis</h1>
            @endif
        </a>
        <i class="mobile-nav-toggle mobile-nav-show fa-solid fa-bars"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none fa-solid fa-xmark"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{route('index')}}" class="active">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('services')}}">Services</a></li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="fa-solid fa-caret-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span><i class="fa-solid fa-caret-down"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a href="{{route('contact')}}">Contact</a></li>
                <li class="dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-globe"></i>
                        <span class="language">{{ __('Home.Language') }}</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('language','vi')}}">
                                <img src="" alt="" class="rounded-circle">
                                <div>Vietnamese</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('language','en')}}">
                                <img src="" alt="" class="rounded-circle">
                                <div>English</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="swiper bannerSwiper">
        <div class="swiper-wrapper">
            @if($banners)
                @foreach($banners as $banner)
                    <div class="swiper-slide bannerList">
                        <img src="{{asset($banner->bannerImage)}}" alt="">
                    </div>
                @endforeach
            @endif
        </div>
        <!-- pagination -->
        <div class="swiper-pagination showcaseSlider-pagination"></div>
    </div>
    <a href="#scroll1" class="scrollSliderButton">
        <div class=""></div>
    </a>
</section>
<!-- End Header -->
<script>
    const selectHeader = document.querySelector('#header');
    if (selectHeader) {
        document.addEventListener('scroll', () => {
            window.scrollY > 100 ? selectHeader.classList.add('sticked') : selectHeader.classList.remove('sticked');
        });
    }
</script>