@php
    $menus = \App\Models\Menu::where('status', \App\Enums\MenuStatus::ACTIVE)->orderBy('arrange', 'ASC')->get();
    $listTrack = \App\Models\TrackandTrace::where('status', \App\Enums\TrackandTraceStatus::ACTIVE)->get();
@endphp<!-- ======= Header ======= -->
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
                @if($menus->isNotEmpty())
                    @foreach($menus as $menu)
                        @php
                            $menuCategory = $menu->key;
                            $isCategory = false;
                            if ($menuCategory == 'category'){
                                $isCategory =true;
                            }
                            $menu_child = null;
                            if ($isCategory == true){
                                $menu_child = \App\Models\Category::where('parent_id', $menu->url)->get();
                            }
                        @endphp
                        @if($menu_child)
                            <li class="dropdown">
                                <a class="dropdown-toggle" id="dropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                    @if(app()->getLocale() == 'vi')
                                        {{$menu->title_vi}}
                                    @else
                                        {{$menu->title_en}}
                                    @endif
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                                    @foreach($menu_child as $item)
                                        <li>
                                            @php
                                                $newsList = \App\Models\News::whereRaw("FIND_IN_SET(?, news.category_vi)", [$item->id])->where('status', \App\Enums\NewsStatus::ACTIVE)->get();
                                            @endphp
                                            @if($newsList->isEmpty())
                                                <a class="dropdown-item" href="#">
                                                    @if(app()->getLocale() == 'vi')
                                                        {{$item->name_vi}}
                                                    @else
                                                        {{$item->name_en}}
                                                    @endif
                                                </a>
                                            @else
                                                <a class="dropdown-item" href="{{route('news.services',$item->id)}}">
                                                    @if(app()->getLocale() == 'vi')
                                                        {{$item->name_vi}}
                                                    @else
                                                        {{$item->name_en}}
                                                    @endif
                                                </a>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li>
                                <a href="{{$menu->url}}">
                                    @if(app()->getLocale() == 'vi')
                                        {{$menu->title_vi}}
                                    @else
                                        {{$menu->title_en}}
                                    @endif
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
                <li class="dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-globe"></i>
                        <span class="ml-2 language">{{ __('home.Language') }}</span>
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
                @if($listTrack->isNotEmpty())
                    <li class="track">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                TRACK&TRACE
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                                 tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body row text-center">
                                            <h4 class="modal-title mb-4" style="" id="staticBackdropLabel">{{ __('home.List of shipping companies') }}</h4>
                                            @foreach($listTrack as $item)
                                                <a href="{{$item->url}}" target="_blank" class="col-md-2 col-sm-3 col-6">
                                                    <img src="{{asset($item->thumbnail)}}" alt="">
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                @endif
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