<!-- ======= Header ======= -->
<header id="header" class="header align-items-center fixed-top">
    <div class="header-desktop container-fluid container-xl align-items-center justify-content-between">
        <a href="{{route('index')}}" class="logo d-flex align-items-center">
            <h1>Logis</h1>
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
                <li><a class="get-a-quote" href="#">Get a Quote</a></li>
            </ul>
        </nav><!-- .navbar -->
    </div>
    <div class="header-mobile">
        <div class="d-flex justify-content-between header-mobile--top">
            <div class="hd-desktop--left">
                <a href="{{route('index')}}" class="logo d-flex align-items-center">
                    <h1>Logis</h1>
                </a>
            </div>
            <div class="hd-desktop--right d-flex justify-content-end">
                <button onclick="openMenu()"><i class="fa-solid fa-bars"></i></button>
            </div>
        </div>
        <div class="nav_menu" id="demo">
            <div class="nav_menu--header d-flex justify-content-between">
                <div onclick="closeMenu()" class="header-left">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="header-right">
                    <a href=""><i class="fa-solid fa-house"></i></a>
                </div>
            </div>
            <div class="nav_menu--body">
                <div class="list-menu">
                    <div class="menu-item"><a href="#"><p>News</p></a></div>
                    <div class="menu-item"><a href="#"><p>Mentoring</p></a></div>
                    <div class="menu-item"><a href="#"><p>Education Training</p></a></div>
                    <div class="menu-item"><a href="#"><p>Clinic</p></a></div>
                    <div class="menu-item"><a href="#"><p>Recruitment</p></a></div>
                    <div class="menu-item"><a href="#"><p>Selling buying</p></a></div>
                </div>
            </div>
        </div>
        <div class="nav_search" id="nav_search">
            <div class="nav_search--header d-flex justify-content-between">
                <div onclick="closeSearch()" class="header-left">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="nav_search--body">
                <div class="searchbox">
                    <div class="input-group">
                        <div class="form-outline">
                            <input type="search" id="form1" class="form-control" placeholder="Please enter a search term." />
                        </div>
                        <button type="button" class="btn">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
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