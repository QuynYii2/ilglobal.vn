<!-- ======= Footer ======= -->
@if($configs)
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="fa-solid fa-arrow-up"></i></a>
<a href="tel: {{$configs->phone}}" class="icon-contact-phone d-flex align-items-center justify-content-center"><img src="{{asset('assets/img/phone.png')}}" alt=""></a>
<a href="{{$configs->zalo}}" class="icon-contact-zalo d-flex align-items-center justify-content-center"><img src="{{asset('assets/img/zalo.png')}}" alt=""></a>
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

            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Product Management</a></li>
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Graphic Design</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>{{ __('home.Contact Us') }}</h4>
                <p>
                    {{$configs->address}}
                    <br><br>
                    <strong>Phone: </strong> {{$configs->phone}}<br>
                    <strong>Email: </strong> {{$configs->email}}<br>
                </p>

            </div>

        </div>
    </div>

    <div class="container mt-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>

</footer><!-- End Footer -->
<!-- End Footer -->