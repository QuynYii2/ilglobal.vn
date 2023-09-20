<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="{{route('index')}}" class="logo d-flex align-items-center">
            @php
                $configs = \App\Models\Configs::where('status', \App\Enums\CategoryStatus::ACTIVE)->first();
            @endphp
            @if($configs)
                <img src="{{asset($configs->logo)}}" alt="">
            @endif
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item dropdown">
                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-globe"></i>
                    <span class="language">{{ __('home.Language') }}</span>
                </a>
                <!-- End Messages Icon -->
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">

                    <li class="message-item">
                        <a href="{{route('language','vi')}}">
                            <img src="" alt="" class="rounded-circle">
                            <div>
                                <h4>Vietnamese</h4>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="message-item">
                        <a href="{{route('language','en')}}">
                            <img src="" alt="" class="rounded-circle">
                            <div>
                                <h4>English</h4>
                            </div>
                        </a>
                    </li>
                </ul><!-- End Messages Dropdown Items -->

            </li><!-- End Messages Nav -->

            <li class="nav-item dropdown pe-3">
                @php
                    $user =  \App\Models\User::where('status', \App\Enums\UserStatus::ACTIVE)->first();
                @endphp
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="{{$user->avt}}" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{$user->name}}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{$user->name}}</h6>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{route('auth.logout')}}">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>{{ __('home.Sign Out') }}</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
