<!-- ======= Footer ======= -->
@if($configs)
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="fa-solid fa-arrow-up"></i></a>
<a href="tel: {{$configs->phone}}" class="icon-contact-phone d-flex align-items-center justify-content-center"><img src="{{asset('assets/img/phone.png')}}" alt=""></a>
<a href="zalo://chat?to={{$configs->zalo}}" class="icon-contact-zalo d-flex align-items-center justify-content-center"><img src="{{asset('assets/img/zalo.png')}}" alt=""></a>
@endif
<footer id="footer" class="footer">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
                @if($configs)
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span><img src="{{asset($configs->logo)}}" alt=""></span>
                    </a>
                    <p>
                        @if(app()->getLocale() == 'vi')
                            {{$configs->short_introduction_vi}}
                        @else
                            {{$configs->short_introduction_en}}
                        @endif
                    </p>
                @endif
                <div class="social-links d-flex mt-4">
                    @if($configs)
                        <a href="tel: {{$configs->phone}}" class="phone" rel="nofollow" target="_blank"><i class="fa-solid fa-phone"></i></a>
                        <a href="{{$configs->facebook}}" class="facebook" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="{{$configs->zalo}}" class="zalo" target="_blank"><i class="fa-solid fa-comments"></i></a>
                    @endif
                </div>
            </div>
            @php
                $listNew = \App\Models\News::where('status', \App\Enums\NewsStatus::ACTIVE)->limit(5)->get();
                $listService = \App\Models\Category::where('status', \App\Enums\CategoryStatus::ACTIVE)->where('parent_id', '!=', null)->orderByDesc('id')->limit(5)->get();
            @endphp

            <div class="col-lg-2 col-6 footer-links">
                <h4>{{ __('home.Service') }}</h4>
                <ul>
                    @foreach($listService as $service)
                        <li>
                            <a href="/">
                                @if(app()->getLocale() == 'vi')
                                    {{$service->name_vi}}
                                @else
                                    {{$service->name_en}}
                                @endif
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-2 col-6 footer-links">
                <h4>{{ __('home.News') }}</h4>
                <ul>
                    @foreach($listNew as $new)
                        <li><a href="{{route('service-details', $new->id)}}">
                        @if(app()->getLocale() == 'vi')
                            {{$new->title_vi}}
                        @else
                            {{$new->title_en}}
                        @endif
                        </a></li>
                    @endforeach
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>{{ __('home.Contact Us') }}</h4>
                <p>
                    {{$configs->address}}
                    <br><br>
                    <strong>Phone:  </strong> {{$configs->phone}}<br>
                    <strong>Email:  </strong> {{$configs->email}}<br>
                </p>

            </div>

        </div>
    </div>

    <div class="container mt-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
        </div>
    </div>

</footer><!-- End Footer -->
<!-- End Footer -->