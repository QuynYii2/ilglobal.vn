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
            </ul>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->

<!-- End Header -->
<script>
    const selectHeader = document.querySelector('#header');
    if (selectHeader) {
        document.addEventListener('scroll', () => {
            window.scrollY > 100 ? selectHeader.classList.add('sticked') : selectHeader.classList.remove('sticked');
        });
    }
</script>