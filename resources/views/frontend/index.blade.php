@extends('frontend.layouts.master')
@section('title', 'Home page')
@section('main-content')
    <!-- ======= Header ======= -->
    {{--    <header id="header" class="header d-flex align-items-center fixed-top">--}}
    {{--        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">--}}

    {{--            <a href="index.html" class="logo d-flex align-items-center">--}}
    {{--                <!-- Uncomment the line below if you also wish to use an image logo -->--}}
    {{--                <!-- <img src="scss/img/logo.png" alt=""> -->--}}
    {{--                <h1>Logis</h1>--}}
    {{--            </a>--}}

    {{--            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>--}}
    {{--            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>--}}
    {{--            <nav id="navbar" class="navbar">--}}
    {{--                <ul>--}}
    {{--                    <li><a href="index.html" class="active">Home</a></li>--}}
    {{--                    <li><a href="about.html">About</a></li>--}}
    {{--                    <li><a href="services.html">Services</a></li>--}}
    {{--                    <li><a href="pricing.html">Pricing</a></li>--}}
    {{--                    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>--}}
    {{--                        <ul>--}}
    {{--                            <li><a href="#">Drop Down 1</a></li>--}}
    {{--                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>--}}
    {{--                                <ul>--}}
    {{--                                    <li><a href="#">Deep Drop Down 1</a></li>--}}
    {{--                                    <li><a href="#">Deep Drop Down 2</a></li>--}}
    {{--                                    <li><a href="#">Deep Drop Down 3</a></li>--}}
    {{--                                    <li><a href="#">Deep Drop Down 4</a></li>--}}
    {{--                                    <li><a href="#">Deep Drop Down 5</a></li>--}}
    {{--                                </ul>--}}
    {{--                            </li>--}}
    {{--                            <li><a href="#">Drop Down 2</a></li>--}}
    {{--                            <li><a href="#">Drop Down 3</a></li>--}}
    {{--                            <li><a href="#">Drop Down 4</a></li>--}}
    {{--                        </ul>--}}
    {{--                    </li>--}}
    {{--                    <li><a href="contact.html">Contact</a></li>--}}
    {{--                    <li><a class="get-a-quote" href="get-a-quote.html">Get a Quote</a></li>--}}
    {{--                </ul>--}}
    {{--            </nav><!-- .navbar -->--}}

    {{--        </div>--}}
    {{--    </header><!-- End Header -->--}}
    <!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2 data-aos="fade-up">Your Lightning Fast Delivery Partner</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Facere distinctio molestiae nisi fugit tenetur repellat
                        non praesentium nesciunt optio quis sit odio nemo quisquam. eius quos reiciendis eum vel eum
                        voluptatem eum maiores eaque id optio ullam occaecati odio est possimus vel reprehenderit</p>

                    <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                          data-aos-delay="200">
                        <input type="text" class="form-control" placeholder="ZIP code or CitY">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>

                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="232"
                                      data-purecounter-duration="1" class="purecounter"></span>
                                <p>Clients</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="521"
                                      data-purecounter-duration="1" class="purecounter"></span>
                                <p>Projects</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="1453"
                                      data-purecounter-duration="1" class="purecounter"></span>
                                <p>Support</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                      class="purecounter"></span>
                                <p>Workers</p>
                            </div>
                        </div><!-- End Stats Item -->

                    </div>
                </div>

                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="scss/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
                </div>

            </div>
        </div>
    </section>
    <!-- End Hero Section -->
    <!-- #main -->
    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
                        <div>
                            <h4 class="title">Lorem Ipsum</h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint occaecati cupiditate non provident</p>
                            <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i
                                        class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
                        <div>
                            <h4 class="title">Dolor Sitema</h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat tarad limino ata</p>
                            <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i
                                        class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
                        <div>
                            <h4 class="title">Sed ut perspiciatis</h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur</p>
                            <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i
                                        class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about pt-0">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
                        <img src="scss/img/about.jpg" class="img-fluid" alt="">
                        <a href="" class="glightbox play-btn"></a>
                    </div>
                    <div class="col-lg-6 content order-last  order-lg-first">
                        <h3>About Us</h3>
                        <p>
                            Dolor iure expedita id fuga asperiores qui sunt consequatur minima. Quidem voluptas
                            deleniti. Sit quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti totam
                            ut eius incidunt reiciendis veritatis asperiores placeat.
                        </p>
                        <ul>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-diagram-3"></i>
                                <div>
                                    <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                                    <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre
                                        trade</p>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-fullscreen-exit"></i>
                                <div>
                                    <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                                    <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna
                                        pasata redi</p>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-broadcast"></i>
                                <div>
                                    <h5>Voluptatem et qui exercitationem</h5>
                                    <p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime
                                        veniam</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="service" class="services pt-0">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <span>Our Services</span>
                    <h2>Our Services</h2>

                </div>

                <div class="row gy-4">
                    @foreach($products as $product)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{$product->thumbnail}}" alt="" class="img-fluid">
                                </div>
                                <h3><a href="service-details.html"
                                       class="stretched-link">{{strip_tags($product->title_vi)}}</a></h3>
                                <p>{{strip_tags($product->short_content_vi)}}</p>
                            </div>
                        </div><!-- End Card Item -->
                    @endforeach
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container" data-aos="zoom-out">

                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h3>Call To Action</h3>
                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                        <a class="cta-btn" href="#">Call To Action</a>
                    </div>
                </div>

            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

                    <div class="col-md-5">
                        <img src="scss/img/features-1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7">
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </li>
                            <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
                            </li>
                            <li><i class="bi bi-check"></i> Ullam est qui quos consequatur eos accusamus.</li>
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="scss/img/features-2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 order-2 order-md-1">
                        <h3>Corporis temporibus maiores provident</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="scss/img/features-3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7">
                        <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
                        <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe
                            odit aut quia voluptatem hic voluptas dolor doloremque.</p>
                        <ul>
                            <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </li>
                            <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
                            </li>
                            <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.
                            </li>
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="scss/img/features-4.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 order-2 order-md-1">
                        <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                </div><!-- Features Item -->

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing pt-0">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <span>Pricing</span>
                    <h2>Pricing</h2>

                </div>

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="pricing-item">
                            <h3>Free Plan</h3>
                            <h4><sup>$</sup>0<span> / month</span></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span>
                                </li>
                            </ul>
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="pricing-item featured">
                            <h3>Business Plan</h3>
                            <h4><sup>$</sup>29<span> / month</span></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
                            </ul>
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="pricing-item">
                            <h3>Developer Plan</h3>
                            <h4><sup>$</sup>49<span> / month</span></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
                            </ul>
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div><!-- End Pricing Item -->

                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="slides-1 swiper" data-aos="fade-up">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="scss/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="scss/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="scss/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="scss/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="scss/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <span>Frequently Asked Questions</span>
                    <h2>Frequently Asked Questions</h2>

                </div>

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-10">

                        <div class="accordion accordion-flush" id="faqlist">

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq-content-1">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Non consectetur a erat nam at lectus urna duis?
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                        laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                        rhoncus dolor purus non.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq-content-2">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                        scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                        Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq-content-3">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                        Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                        suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                        convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq-content-4">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                                    </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                        scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                        Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq-content-5">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim
                                        suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan.
                                        Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit
                                        turpis cursus in
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                        </div>

                    </div>
                </div>
            </div>
        </section><!-- End Frequently Asked Questions Section -->
        <section class="home-showcase">
            <div class="swiper home-showcaseSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-image" data-swiper-parallax-x="3%"
                             style="background-image:url(https://source.unsplash.com/random?sig=42)">
                            <div class="text-container">
                                <h1 class="bigTitle">Lorem ipsum dolor<span class="orangeIcon"></span> <br> Sit amet
                                    <span class="orangeIcon"></span> <br> Consectetur <span
                                            class="orangeIcon"></span></h1>
                                <div class="container-arrow-button">
                                    <a class="cta arrow-button" href="#">
                                        an example of link
                                        <svg viewBox="0 0 76.922 65">
                                            <circle cx="32.5" cy="32.5" r="32" transform="translate(11.922)"
                                                    fill="none" stroke="#8c97d0" stroke-width="1"></circle>
                                            <path id="Union_1" data-name="Union 1"
                                                  d="M-6071.353,33.349l9.643-9.642H-6111v-2h48.941l-9.293-9.294,1.414-1.414,11.881,11.883-11.881,11.881Z"
                                                  transform="translate(6111 10)" fill="#10112b"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="filter"></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-image" data-swiper-parallax-x="3%"
                             style="background-image:url(https://source.unsplash.com/random?sig=43)">
                            <div class="text-container">
                                <h1 class="bigTitle">Lorem ipsum dolor<span class="orangeIcon"></span> <br> Sit amet
                                    <span class="orangeIcon"></span> <br> Consectetur <span
                                            class="orangeIcon"></span></h1>
                                <div class="container-arrow-button">
                                    <a class="cta arrow-button" href="#">
                                        an example of link
                                        <svg viewBox="0 0 76.922 65">
                                            <circle cx="32.5" cy="32.5" r="32" transform="translate(11.922)"
                                                    fill="none" stroke="#8c97d0" stroke-width="1"></circle>
                                            <path id="Union_1" data-name="Union 1"
                                                  d="M-6071.353,33.349l9.643-9.642H-6111v-2h48.941l-9.293-9.294,1.414-1.414,11.881,11.883-11.881,11.881Z"
                                                  transform="translate(6111 10)" fill="#10112b"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="filter"></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-image" data-swiper-parallax-x="3%"
                             style="background-image:url(https://source.unsplash.com/random?sig=44)">
                            <div class="text-container">
                                <h1 class="bigTitle">Lorem ipsum dolor<span class="orangeIcon"></span> <br> Sit amet
                                    <span class="orangeIcon"></span> <br> Consectetur <span
                                            class="orangeIcon"></span></h1>
                                <div class="container-arrow-button">
                                    <a class="cta arrow-button" href="#">
                                        an example of link
                                        <svg viewBox="0 0 76.922 65">
                                            <circle cx="32.5" cy="32.5" r="32" transform="translate(11.922)"
                                                    fill="none" stroke="#8c97d0" stroke-width="1"></circle>
                                            <path id="Union_1" data-name="Union 1"
                                                  d="M-6071.353,33.349l9.643-9.642H-6111v-2h48.941l-9.293-9.294,1.414-1.414,11.881,11.883-11.881,11.881Z"
                                                  transform="translate(6111 10)" fill="#10112b"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="filter"></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-image" data-swiper-parallax-x="3%"
                             style="background-image:url(https://source.unsplash.com/random?sig=45)">
                            <div class="text-container">
                                <h1 class="bigTitle">Lorem ipsum dolor<span class="orangeIcon"></span> <br> Sit amet
                                    <span class="orangeIcon"></span> <br> Consectetur <span
                                            class="orangeIcon"></span></h1>
                                <div class="container-arrow-button">
                                    <a class="cta arrow-button" href="#">
                                        an example of link
                                        <svg viewBox="0 0 76.922 65">
                                            <circle cx="32.5" cy="32.5" r="32" transform="translate(11.922)"
                                                    fill="none" stroke="#8c97d0" stroke-width="1"></circle>
                                            <path id="Union_1" data-name="Union 1"
                                                  d="M-6071.353,33.349l9.643-9.642H-6111v-2h48.941l-9.293-9.294,1.414-1.414,11.881,11.883-11.881,11.881Z"
                                                  transform="translate(6111 10)" fill="#10112b"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="filter"></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-image" data-swiper-parallax-x="3%"
                             style="background-image:url(https://source.unsplash.com/random?sig=46)">
                            <div class="text-container">
                                <h1 class="bigTitle">Lorem ipsum dolor<span class="orangeIcon"></span> <br> Sit amet
                                    <span class="orangeIcon"></span> <br> Consectetur <span
                                            class="orangeIcon"></span></h1>
                                <div class="container-arrow-button">
                                    <a class="cta arrow-button" href="#">
                                        an example of link
                                        <svg viewBox="0 0 76.922 65">
                                            <circle cx="32.5" cy="32.5" r="32" transform="translate(11.922)"
                                                    fill="none" stroke="#8c97d0" stroke-width="1"></circle>
                                            <path id="Union_1" data-name="Union 1"
                                                  d="M-6071.353,33.349l9.643-9.642H-6111v-2h48.941l-9.293-9.294,1.414-1.414,11.881,11.883-11.881,11.881Z"
                                                  transform="translate(6111 10)" fill="#10112b"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="filter"></div>
                        </div>
                    </div>
                </div>

                <!-- pagination -->
                <div class="swiper-pagination showcaseSlider-pagination"></div>

                <!-- navigation buttons -->
                <div class="showcaseSlider-nav">
                    <div class="swiper-button-prev showcaseSlider-prev"></div>
                    <div class="swiper-button-next showcaseSlider-next"></div>
                </div>

            </div>
            <a href="#scroll1" class="scrollSliderButton">
                <div class=""></div>
            </a>
        </section>

    </main>
    <!-- End #main -->
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    {{--    <div id="content">--}}
    {{--        <article id="post-2" class="post-2 page type-page status-publish hentry">--}}
    {{--     start hero slide       --}}
    {{--            --}}
    {{--     end hero slide       --}}
    {{--            <article class="container">--}}
    {{--                <div class="row-full-width">--}}
    {{--                </div>--}}
    {{--                <div class="row-fluid hidden-lg hidden-md hidden-sm custom_1449213766351 row-has-fill row-o-full-height row-o-columns-middle row-flex style-oIZzi"--}}
    {{--                     id="style-oIZzi">--}}
    {{--                    <div class="column column_container col-sm-12 hidden-lg hidden-md hidden-sm">--}}
    {{--                        <div class="column-inner custom_1449213666600">--}}
    {{--                            <div class="wrapper">--}}
    {{--                                <h1 class="custom_heading white_stripe style-gqY4P" id="style-gqY4P">--}}
    {{--                                    Transport WordPress Theme--}}
    {{--                                </h1>--}}
    {{--                                <div class="text_column content_element ">--}}
    {{--                                    <div class="wrapper">--}}
    {{--                                        <p>--}}
    {{--                                            <span id="style-E4NBM" class="style-E4NBM">--}}
    {{--                                                Starting from loading to unloading and maintaining the highest standards in terms of safety while in transit, we take nothing to chance.--}}
    {{--                                            </span>--}}
    {{--                                        </p>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="btn3-container btn3-inline">--}}
    {{--                                    <button class="general btn3 btn3-size-md btn3-shape-round btn3-style-outline btn3-icon-right btn3-color-theme_style_3">--}}
    {{--                                        Learn More--}}
    {{--                                        <i class="btn3-icon stm-arrow-next">--}}
    {{--                                        </i>--}}
    {{--                                    </button>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="row row-fluid custom_1450264294682">--}}
    {{--                    <div class="column column_container col-sm-12 col-lg-6 col-md-6">--}}
    {{--                        <div class="column-inner">--}}
    {{--                            <div class="wrapper">--}}
    {{--                                <div class="text_column content_element ">--}}
    {{--                                    <div class="wrapper">--}}
    {{--                                        <h2>--}}
    {{--                                            <span id="style-pRgto" class="style-pRgto">--}}
    {{--                                                WELCOME TO OUR WEBSITE!--}}
    {{--                                            </span>--}}
    {{--                                        </h2>--}}
    {{--                                        <p>--}}
    {{--                                            Transcargo makes business flow. As one of the world’s leading--}}
    {{--                                            non-asset-based supply chain management companies, we design and implement--}}
    {{--                                            industry-leading solutions in both freight management.--}}
    {{--                                        </p>--}}
    {{--                                        <p>--}}
    {{--                                            Over 42,000 dedicated employees, working in 17 regional clusters around the--}}
    {{--                                            globe, deliver operational excellence — to provide viable answers to the--}}
    {{--                                            most challenging supply chain questions.--}}
    {{--                                        </p>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="row inner row-fluid">--}}
    {{--                                    <div class="column column_container col-sm-6">--}}
    {{--                                        <div class="column-inner">--}}
    {{--                                            <div class="wrapper">--}}
    {{--                                                <div class="text_column content_element ">--}}
    {{--                                                    <div class="wrapper">--}}
    {{--                                                        <p>--}}
    {{--                                                            <strong>--}}
    {{--                                                                MATT GARDNER--}}
    {{--                                                                <br>--}}
    {{--                                                            </strong>--}}
    {{--                                                            <small>--}}
    {{--                                                                Chairman &amp; Chief Executive Officer--}}
    {{--                                                            </small>--}}
    {{--                                                        </p>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="column column_container col-sm-6">--}}
    {{--                                        <div class="column-inner">--}}
    {{--                                            <div class="wrapper">--}}
    {{--                                                <div class="single_image content_element align_left  custom_1450267009214">--}}
    {{--                                                    <figure class="wrapper figure">--}}
    {{--                                                        <div class="single_image-wrapper   box_border_grey">--}}
    {{--                                                            <img width="194" height="37"--}}
    {{--                                                                 src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/autograph.png"--}}
    {{--                                                                 class="single_image-img attachment-full" alt=""--}}
    {{--                                                                 decoding="async" loading="lazy">--}}
    {{--                                                        </div>--}}
    {{--                                                    </figure>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <h1 class="custom_heading no_before custom_1495104670618 style-H2kTt" id="style-H2kTt">--}}
    {{--                                    Transport WordPress Theme - Transcargo--}}
    {{--                                </h1>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="column column_container col-sm-12 col-lg-6 col-md-6 hidden-sm hidden-xs">--}}
    {{--                        <div class="column-inner">--}}
    {{--                            <div class="wrapper">--}}
    {{--                                <div class="stm_video_popup">--}}
    {{--                                    <a href="#" class="fancy_video"--}}
    {{--                                       data-wpel-link="external" rel="nofollow external noopener noreferrer">--}}
    {{--                                        <img width="540" height="358"--}}
    {{--                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/video_preview.jpg"--}}
    {{--                                             class="attachment-full" alt="" decoding="async" loading="lazy">--}}
    {{--                                    </a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </article>--}}
    {{--                <div class="row-fluid secondary_bg_color custom_row-content row-content" id="row-content">--}}
    {{--                    <div class="column column_container col-sm-6 col-lg-3 col-md-3">--}}
    {{--                        <div class="column-inner custom_1449142338264">--}}
    {{--                            <div class="wrappers">--}}
    {{--                                <div class="stm_counter">--}}
    {{--                                    <div class="icon style-hHUs9" id="style-hHUs9">--}}
    {{--                                        <i class="stm-projects-done">--}}
    {{--                                        </i>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="text">--}}
    {{--                                        <div class="value" id="counter_60476501623c59bea">--}}
    {{--                                            320--}}
    {{--                                        </div>--}}
    {{--                                        <div class="title">--}}
    {{--                                            Projects Done--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="column column_container col-sm-6 col-lg-3 col-md-3">--}}
    {{--                        <div class="column-inner custom_1449142329000">--}}
    {{--                            <div class="wrappers">--}}
    {{--                                <div class="stm_counter">--}}
    {{--                                    <div class="icon style-5S2Ko" id="style-5S2Ko">--}}
    {{--                                        <i class="stm-clients-worldwide">--}}
    {{--                                        </i>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="text">--}}
    {{--                                        <div class="value" id="counter_18106501623c59eaf">--}}
    {{--                                            72--}}
    {{--                                        </div>--}}
    {{--                                        <div class="title">--}}
    {{--                                            Clients Worldwide--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="column column_container col-sm-6 col-lg-3 col-md-3">--}}
    {{--                        <div class="column-inner custom_1449142343672">--}}
    {{--                            <div class="wrappers">--}}
    {{--                                <div class="stm_counter">--}}
    {{--                                    <div class="icon style-o84ii" id="style-o84ii">--}}
    {{--                                        <i class="stm-owned-vehicles">--}}
    {{--                                        </i>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="text">--}}
    {{--                                        <div class="value" id="counter_85986501623c5a12b">--}}
    {{--                                            153--}}
    {{--                                        </div>--}}
    {{--                                        <div class="title">--}}
    {{--                                            Owned Vehicles--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="column column_container col-sm-6 col-lg-3 col-md-3">--}}
    {{--                        <div class="column-inner custom_1449142350247">--}}
    {{--                            <div class="wrappers">--}}
    {{--                                <div class="stm_counter">--}}
    {{--                                    <div class="icon style-gSSvD" id="style-gSSvD">--}}
    {{--                                        <i class="stm-people-in-team">--}}
    {{--                                        </i>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="text">--}}
    {{--                                        <div class="value" id="counter_71696501623c5a352">--}}
    {{--                                            114--}}
    {{--                                        </div>--}}
    {{--                                        <div class="title">--}}
    {{--                                            People in Team--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="row-full-width">--}}
    {{--                </div>--}}
    {{--                <div data-full-width="true" data-full-width-init="true" class="row-fluid base_bg_color custom_1450269319951 style-GOW4W" id="style-GOW4W">--}}
    {{--                    <div class="column column_container col-sm-12">--}}
    {{--                        <div class="column-inner">--}}
    {{--                            <div class="wrapper">--}}
    {{--                                <div class="services">--}}
    {{--                                    <div class="row">--}}
    {{--                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">--}}
    {{--                                            <h2>--}}
    {{--                                                <span id="style-GXEbW" class="style-GXEbW">--}}
    {{--                                                    Special Services--}}
    {{--                                                </span>--}}
    {{--                                            </h2>--}}
    {{--                                            <p>--}}
    {{--                                                <span id="style-pjVSy" class="style-pjVSy">--}}
    {{--                                                    Globally known for our ability to handle every last detail of our customers’ particular logistics and forwarding needs, TransCargo’s Special Services team takes care of all your logistics.--}}
    {{--                                                </span>--}}
    {{--                                            </p>--}}
    {{--                                            <div class="owl-dots" id="owl-nav-6501623c5b461">--}}
    {{--                                                <div class="owl-dot active">--}}
    {{--                                                    <span></span>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="owl-dot">--}}
    {{--                                                    <span></span>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="owl-dot">--}}
    {{--                                                    <span></span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">--}}
    {{--                                            <div class="services_carousel_wr">--}}
    {{--                                                <div class="services_carousel owl-carousel owl-theme owl-loaded"--}}
    {{--                                                     id="owl-6501623c5b460">--}}
    {{--                                                    <div class="owl-stage-outer">--}}
    {{--                                                        <div class="owl-stage style-WVYG9" id="style-WVYG9">--}}
    {{--                                                            <div class="owl-item style-eLQPH" id="style-eLQPH">--}}
    {{--                                                                <div class="item">--}}
    {{--                                                                    <div class="item_wr">--}}
    {{--                                                                        <div class="item_thumbnail">--}}
    {{--                                                                            <a href="#"--}}
    {{--                                                                               data-wpel-link="internal">--}}
    {{--                                                                                <img width="255" height="170"--}}
    {{--                                                                                     src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/dreamstime_xxl_20955694-255x170.jpg"--}}
    {{--                                                                                     class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"--}}
    {{--                                                                                     alt="" decoding="async">--}}
    {{--                                                                            </a>--}}
    {{--                                                                        </div>--}}
    {{--                                                                        <div class="content">--}}
    {{--                                                                            <h6>--}}
    {{--                                                                                <a href="#"--}}
    {{--                                                                                   data-wpel-link="internal">--}}
    {{--                                                                                    Cargo Insurance--}}
    {{--                                                                                </a>--}}
    {{--                                                                            </h6>--}}
    {{--                                                                            <p>--}}
    {{--                                                                                Provides a scalable and customizable--}}
    {{--                                                                                solution for customers who have programs--}}
    {{--                                                                                to retire outdated IT scss.--}}
    {{--                                                                            </p>--}}
    {{--                                                                            <a href="#"--}}
    {{--                                                                               class="read_more"--}}
    {{--                                                                               data-wpel-link="internal">--}}
    {{--                                                                                <em>--}}
    {{--                                                                                    read more--}}
    {{--                                                                                </em>--}}
    {{--                                                                                <span>--}}
    {{--                                                                                    →--}}
    {{--                                                                                </span>--}}
    {{--                                                                            </a>--}}
    {{--                                                                        </div>--}}
    {{--                                                                    </div>--}}
    {{--                                                                </div>--}}
    {{--                                                            </div>--}}


    {{--                                                            @foreach($products as $product)--}}
    {{--                                                                <div class="owl-item active style-oXTtR"--}}
    {{--                                                                     id="style-oXTtR">--}}
    {{--                                                                    <div class="item">--}}
    {{--                                                                        <div class="item_wr">--}}
    {{--                                                                            <div class="item_thumbnail">--}}
    {{--                                                                                <a href="#" data-wpel-link="internal">--}}
    {{--                                                                                    <img width="255" height="170"--}}
    {{--                                                                                         src="{{$product->thumbnail}}"--}}
    {{--                                                                                         class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"--}}
    {{--                                                                                         alt="" decoding="async"--}}
    {{--                                                                                         loading="lazy">--}}
    {{--                                                                                </a>--}}
    {{--                                                                            </div>--}}
    {{--                                                                            <div class="content">--}}
    {{--                                                                                <h6>--}}
    {{--                                                                                    <a href="#"--}}
    {{--                                                                                       data-wpel-link="internal">--}}
    {{--                                                                                        {{strip_tags($product->title_vi)}}--}}
    {{--                                                                                    </a>--}}
    {{--                                                                                </h6>--}}
    {{--                                                                                <p>--}}
    {{--                                                                                    {{strip_tags($product->short_content_vi)}}--}}
    {{--                                                                                </p>--}}
    {{--                                                                                <a href="#" class="read_more"--}}
    {{--                                                                                   data-wpel-link="internal">--}}
    {{--                                                                                    <em>--}}
    {{--                                                                                        read more--}}
    {{--                                                                                    </em>--}}
    {{--                                                                                    <span>--}}
    {{--                                                                                        →--}}
    {{--                                                                                    </span>--}}
    {{--                                                                                </a>--}}
    {{--                                                                            </div>--}}
    {{--                                                                        </div>--}}
    {{--                                                                    </div>--}}
    {{--                                                                </div>--}}
    {{--                                                            @endforeach--}}

    {{--                                                        </div>--}}
    {{--                                                    </div>--}}
    {{--                                                    <div class="owl-controls">--}}
    {{--                                                        <div class="owl-nav">--}}
    {{--                                                            <div class="owl-prev style-ZFOYj" id="style-ZFOYj">--}}
    {{--                                                                prev--}}
    {{--                                                            </div>--}}
    {{--                                                            <div class="owl-next style-lF8oX" id="style-lF8oX">--}}
    {{--                                                                next--}}
    {{--                                                            </div>--}}
    {{--                                                        </div>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            <article class="container">--}}
    {{--                <div class="row-full-width">--}}
    {{--                </div>--}}
    {{--                <div data-full-width="true" data-full-width-init="true" data-parallax="3"--}}
    {{--                     data-parallax-image="https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/bg-cta-2.jpg"--}}
    {{--                     class="row-fluid convert_to_table overlay custom_1450437407937 row-has-fill row-o-equal-height row-flex general parallax parallax-content-moving style-sCAH8"--}}
    {{--                     id="style-sCAH8">--}}
    {{--                    <div class="column column_container col-sm-7">--}}
    {{--                        <div class="column-inner custom_1450330273622">--}}
    {{--                            <div class="wrapper">--}}
    {{--                                <h2 style="text-align: left"--}}
    {{--                                    class="custom_heading base_font_color heading_without_line">--}}
    {{--                                    Reach your destination 100% sure and safe--}}
    {{--                                </h2>--}}
    {{--                                <div class="text_column content_element ">--}}
    {{--                                    <div class="wrapper">--}}
    {{--                                        <p>--}}
    {{--                                            <span id="style-4UDPk" class="style-4UDPk">--}}
    {{--                                                We designed a detailed homepage layouts that will fit any transportation industry size. We will take care of your cargo or your pasenger and deliver them safe and on time!--}}
    {{--                                            </span>--}}
    {{--                                        </p>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="btn3-container btn3-inline">--}}
    {{--                                    <a class="general btn3 btn3-size-md btn3-shape-round btn3-style-flat btn3-icon-right btn3-color-theme_style_3"--}}
    {{--                                       href="#" title="Contacts"--}}
    {{--                                       data-wpel-link="internal">--}}
    {{--                                        Contact Now--}}
    {{--                                        <i class="btn3-icon stm-arrow-next">--}}
    {{--                                        </i>--}}
    {{--                                    </a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="column column_container col-sm-5 hidden-md hidden-sm hidden-xs col-has-fill">--}}
    {{--                        <div class="column-inner custom_1450446256472">--}}
    {{--                            <div class="wrapper">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="parallax-inner skrollable skrollable-before style-dZRIA" data-bottom-top="top: -200%;"--}}
    {{--                         data-top-bottom="top: 0%;" id="style-dZRIA">--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="row-full-width">--}}
    {{--                </div>--}}
    {{--                <div class="row-fluid custom_1451973457656">--}}
    {{--                    <div class="column column_container col-sm-12 col-lg-6 col-md-7">--}}
    {{--                        <div class="column-inner custom_1450446299241">--}}
    {{--                            <div class="wrapper">--}}
    {{--                                <h2 style="text-align: left" class="custom_heading custom_1450337112571">--}}
    {{--                                    Latest News--}}
    {{--                                </h2>--}}
    {{--                                <div class="news">--}}
    {{--                                    <ul class="news_list owl-carousel owl-theme owl-loaded" id="owl-6501623c6065f">--}}
    {{--                                        <div class="owl-stage-outer">--}}
    {{--                                            <div class="owl-stage style-kQBoW" id="style-kQBoW">--}}
    {{--                                                <div class="owl-item style-ZcVez" id="style-ZcVez">--}}
    {{--                                                    <li>--}}
    {{--                                                        <div class="news_thumbnail">--}}
    {{--                                                            <a href="#"--}}
    {{--                                                               data-wpel-link="internal">--}}
    {{--                                                                <img width="270" height="330"--}}
    {{--                                                                     src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_86085293_Subscription_Monthly_M-270x330.jpg"--}}
    {{--                                                                     class="attachment-transcargo-image-270x330-croped size-transcargo-image-270x330-croped wp-post-image"--}}
    {{--                                                                     alt="" decoding="async" loading="lazy">--}}
    {{--                                                            </a>--}}
    {{--                                                            <div class="date">--}}
    {{--                                                                <div class="day">--}}
    {{--                                                                    26--}}
    {{--                                                                </div>--}}
    {{--                                                                <div class="month">--}}
    {{--                                                                    Nov--}}
    {{--                                                                </div>--}}
    {{--                                                            </div>--}}
    {{--                                                        </div>--}}
    {{--                                                        <div class="news_content">--}}
    {{--                                                            <h4>--}}
    {{--                                                                <a href="#"--}}
    {{--                                                                   data-wpel-link="internal">--}}
    {{--                                                                    Face the challenges of chain complexity--}}
    {{--                                                                </a>--}}
    {{--                                                            </h4>--}}
    {{--                                                            <p>--}}
    {{--                                                                Established in 2005, the group has grown to over 30--}}
    {{--                                                                people and has completed 900 projects--}}
    {{--                                                            </p>--}}
    {{--                                                            <a href="#"--}}
    {{--                                                               class="read_more" data-wpel-link="internal">--}}
    {{--                                                                <em>--}}
    {{--                                                                    learn more--}}
    {{--                                                                </em>--}}
    {{--                                                                <span>--}}
    {{--                                                                    →--}}
    {{--                                                                </span>--}}
    {{--                                                            </a>--}}
    {{--                                                        </div>--}}
    {{--                                                    </li>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="owl-item active style-KlJH3" id="style-KlJH3">--}}
    {{--                                                    <li>--}}
    {{--                                                        <div class="news_thumbnail">--}}
    {{--                                                            <a href="#"--}}
    {{--                                                               data-wpel-link="internal">--}}
    {{--                                                                <img width="270" height="330"--}}
    {{--                                                                     src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_43887394_Subscription_Monthly_M-270x330.jpg"--}}
    {{--                                                                     class="attachment-transcargo-image-270x330-croped size-transcargo-image-270x330-croped wp-post-image"--}}
    {{--                                                                     alt="" decoding="async" loading="lazy">--}}
    {{--                                                            </a>--}}
    {{--                                                            <div class="date">--}}
    {{--                                                                <div class="day">--}}
    {{--                                                                    24--}}
    {{--                                                                </div>--}}
    {{--                                                                <div class="month">--}}
    {{--                                                                    Nov--}}
    {{--                                                                </div>--}}
    {{--                                                            </div>--}}
    {{--                                                        </div>--}}
    {{--                                                        <div class="news_content">--}}
    {{--                                                            <h4>--}}
    {{--                                                                <a href="#"--}}
    {{--                                                                   data-wpel-link="internal">--}}
    {{--                                                                    We join the environmental organization CCWG--}}
    {{--                                                                </a>--}}
    {{--                                                            </h4>--}}
    {{--                                                            <p>--}}
    {{--                                                                Global leaders in marine container transport, create and--}}
    {{--                                                                use practical tools for measuring--}}
    {{--                                                            </p>--}}
    {{--                                                            <a href="#"--}}
    {{--                                                               class="read_more" data-wpel-link="internal">--}}
    {{--                                                                <em>--}}
    {{--                                                                    learn more--}}
    {{--                                                                </em>--}}
    {{--                                                                <span>--}}
    {{--                                                                    →--}}
    {{--                                                                </span>--}}
    {{--                                                            </a>--}}
    {{--                                                        </div>--}}
    {{--                                                    </li>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="owl-item style-vX52j" id="style-vX52j">--}}
    {{--                                                    <li>--}}
    {{--                                                        <div class="news_thumbnail">--}}
    {{--                                                            <a href="#"--}}
    {{--                                                               data-wpel-link="internal">--}}
    {{--                                                                <img width="270" height="330"--}}
    {{--                                                                     src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_77985301_Subscription_Monthly_M-270x330.jpg"--}}
    {{--                                                                     class="attachment-transcargo-image-270x330-croped size-transcargo-image-270x330-croped wp-post-image"--}}
    {{--                                                                     alt="" decoding="async" loading="lazy">--}}
    {{--                                                            </a>--}}
    {{--                                                            <div class="date">--}}
    {{--                                                                <div class="day">--}}
    {{--                                                                    23--}}
    {{--                                                                </div>--}}
    {{--                                                                <div class="month">--}}
    {{--                                                                    Nov--}}
    {{--                                                                </div>--}}
    {{--                                                            </div>--}}
    {{--                                                        </div>--}}
    {{--                                                        <div class="news_content">--}}
    {{--                                                            <h4>--}}
    {{--                                                                <a href="#"--}}
    {{--                                                                   data-wpel-link="internal">--}}
    {{--                                                                    Tianjin Port Came to a Halt after Explosions--}}
    {{--                                                                </a>--}}
    {{--                                                            </h4>--}}
    {{--                                                            <p>--}}
    {{--                                                                The explosion at Binhai Ocean Port in Tianjin caused--}}
    {{--                                                                severe damage to many warehouses--}}
    {{--                                                            </p>--}}
    {{--                                                            <a href="#"--}}
    {{--                                                               class="read_more" data-wpel-link="internal">--}}
    {{--                                                                <em>--}}
    {{--                                                                    learn more--}}
    {{--                                                                </em>--}}
    {{--                                                                <span>--}}
    {{--                                                                    →--}}
    {{--                                                                </span>--}}
    {{--                                                            </a>--}}
    {{--                                                        </div>--}}
    {{--                                                    </li>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="owl-controls">--}}
    {{--                                            <div class="owl-nav">--}}
    {{--                                                <div class="owl-prev style-CgwgB" id="style-CgwgB">--}}
    {{--                                                    prev--}}
    {{--                                                </div>--}}
    {{--                                                <div class="owl-next style-RiWCa" id="style-RiWCa">--}}
    {{--                                                    next--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </ul>--}}
    {{--                                    <div class="news_footer">--}}
    {{--                                        <div class="owl-dots" id="owl-nav-6501623c60660">--}}
    {{--                                            <div class="owl-dot">--}}
    {{--                                                <span>--}}
    {{--                                                </span>--}}
    {{--                                            </div>--}}
    {{--                                            <div class="owl-dot active">--}}
    {{--                                                <span>--}}
    {{--                                                </span>--}}
    {{--                                            </div>--}}
    {{--                                            <div class="owl-dot">--}}
    {{--                                                <span>--}}
    {{--                                                </span>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <a class="button size-sm icon_right" href="#" target="_self">--}}
    {{--                                            all news--}}
    {{--                                            <i class="stm-arrow-next">--}}
    {{--                                            </i>--}}
    {{--                                        </a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="column column_container col-sm-12 col-lg-6 col-md-5">--}}
    {{--                        <div class="column-inner custom_1450446304318">--}}
    {{--                            <div class="wrapper">--}}
    {{--                                <h2 style="text-align: left" class="custom_heading custom_1450337066920">--}}
    {{--                                    FAQ--}}
    {{--                                </h2>--}}
    {{--                                <div class="accordion" id="accordionExample">--}}
    {{--                                    <div class="accordion-item">--}}
    {{--                                        <h2 class="accordion-header" id="headingOne">--}}
    {{--                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">--}}
    {{--                                                How many times do i have to tell you a few WAYS?--}}
    {{--                                            </button>--}}
    {{--                                        </h2>--}}
    {{--                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">--}}
    {{--                                            <div class="accordion-body">--}}
    {{--                                                Progressively generate synergistic total linkage through cross-media intellectual capital. Enthusiastically parallel task team building e-tailers without standards compliant initiatives. Progressively monetize client-centric outsourcing with excellent communities.--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="accordion-item">--}}
    {{--                                        <h2 class="accordion-header" id="headingTwo">--}}
    {{--                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
    {{--                                                What is do i have to tell you a few lorem?--}}
    {{--                                            </button>--}}
    {{--                                        </h2>--}}
    {{--                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">--}}
    {{--                                            <div class="accordion-body">--}}
    {{--                                                Progressively generate synergistic total linkage through cross-media intellectual capital. Enthusiastically parallel task team building e-tailers without standards compliant initiatives. Progressively monetize client-centric outsourcing with excellent communities.--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="accordion-item">--}}
    {{--                                        <h2 class="accordion-header" id="headingThree">--}}
    {{--                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
    {{--                                                I have a technical problem or support issue I need resolved, who do I email?--}}
    {{--                                            </button>--}}
    {{--                                        </h2>--}}
    {{--                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">--}}
    {{--                                            <div class="accordion-body">--}}
    {{--                                                Progressively generate synergistic total linkage through cross-media intellectual capital. Enthusiastically parallel task team building e-tailers without standards compliant initiatives. Progressively monetize client-centric outsourcing with excellent communities.--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </article>--}}
{{--     start hero slide 2    --}}
    {{--            <nav class="navbar navbar-expand-lg fixed-top navbar-dark py-3">--}}
    {{--                <div class="container"> <a class="navbar-brand font-weight-bold text-uppercase" href="#"></a>--}}
    {{--                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>--}}
    {{--                    <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </nav>--}}
    {{--            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">--}}
    {{--                <ol class="carousel-indicators">--}}
    {{--                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>--}}
    {{--                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>--}}
    {{--                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>--}}
    {{--                </ol>--}}
    {{--                <div class="carousel-inner">--}}
    {{--                    <div class="carousel-item active"> <img src="http://bootstraplily.com/demo/detto-ui-kit/img/intro-one/slider-one.jpg" class="d-block w-100" alt="...">--}}
    {{--                        <div class="background-overlay"></div>--}}
    {{--                        <div class="carousel-caption">--}}
    {{--                            <h5 class="display-4 h4-md mb-4 font-weight-bold">A modular UI Kit for Bootstrap</h5>--}}
    {{--                            <p class="h4 mb-5 pb-3 text-white-50">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>--}}
    {{--                            <a href="" class="btn btn-lg btn-danger">View More</a> </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="carousel-item"> <img src="http://bootstraplily.com/demo/detto-ui-kit/img/intro-one/slider-two.jpg" class="d-block w-100" alt="...">--}}
    {{--                        <div class="background-overlay"></div>--}}
    {{--                        <div class="carousel-caption">--}}
    {{--                            <h5 class="display-4 mb-4 font-weight-bold">A modular UI Kit for Startups</h5>--}}
    {{--                            <p class="h4 mb-5 pb-3 text-white-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
    {{--                            <a href="" class="btn btn-lg btn-danger">View More</a> </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="carousel-item"> <img src="http://bootstraplily.com/demo/detto-ui-kit/img/intro-one/slider-three.jpg" class="d-block w-100" alt="...">--}}
    {{--                        <div class="background-overlay"></div>--}}
    {{--                        <div class="carousel-caption">--}}
    {{--                            <h5 class="display-4 mb-4 font-weight-bold">A modular UI Kit for Development</h5>--}}
    {{--                            <p class="h4 mb-5 pb-3 text-white-50">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>--}}
    {{--                            <a href="" class="btn btn-lg btn-danger">View More</a> </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>--}}


    {{--                 end hero slide 2      --}}
    {{--            <article class="container">--}}
    {{--                <div class="row-full-width">--}}
    {{--                </div>--}}
    {{--                <div class="row-fluid custom_1450356867512">--}}
    {{--                    <div class="column column_container col-sm-12">--}}
    {{--                        <div class="column-inner">--}}
    {{--                            <div class="wrapper">--}}
    {{--                                <div class="image_carousel_wr grayscale">--}}
    {{--                                    <div class="image_carousel owl-carousel owl-theme owl-loaded"--}}
    {{--                                         id="owl-6501623c6535a">--}}
    {{--                                        <div class="owl-stage-outer">--}}
    {{--                                            <div class="owl-stage style-RLpaH d-flex" id="style-RLpaH">--}}
    {{--                                                <div class="owl-item active style-GKDFq" id="style-GKDFq">--}}
    {{--                                                    <div class="item">--}}
    {{--                                                        <img width="268" height="148"--}}
    {{--                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/tmarketing-1.jpg"--}}
    {{--                                                             class="attachment-full" alt="" decoding="async"--}}
    {{--                                                             loading="lazy">--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="owl-item active style-pUsZs" id="style-pUsZs">--}}
    {{--                                                    <div class="item">--}}
    {{--                                                        <img width="268" height="148"--}}
    {{--                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/primo-1.jpg"--}}
    {{--                                                             class="attachment-full" alt="" decoding="async"--}}
    {{--                                                             loading="lazy">--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="owl-item active style-ZTGeG" id="style-ZTGeG">--}}
    {{--                                                    <div class="item">--}}
    {{--                                                        <img width="268" height="148"--}}
    {{--                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/kphone-1.jpg"--}}
    {{--                                                             class="attachment-full" alt="" decoding="async"--}}
    {{--                                                             loading="lazy">--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="owl-item active style-JYOfo" id="style-JYOfo">--}}
    {{--                                                    <div class="item">--}}
    {{--                                                        <img width="268" height="148"--}}
    {{--                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/edge-1.jpg"--}}
    {{--                                                             class="attachment-full" alt="" decoding="async"--}}
    {{--                                                             loading="lazy">--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="owl-item active style-GXodF" id="style-GXodF">--}}
    {{--                                                    <div class="item">--}}
    {{--                                                        <img width="268" height="148"--}}
    {{--                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/arcade-1.jpg"--}}
    {{--                                                             class="attachment-full" alt="" decoding="async"--}}
    {{--                                                             loading="lazy">--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="owl-item active style-a5J2B" id="style-a5J2B">--}}
    {{--                                                    <div class="item">--}}
    {{--                                                        <img width="268" height="148"--}}
    {{--                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/aramiz-1.jpg"--}}
    {{--                                                             class="attachment-full" alt="" decoding="async"--}}
    {{--                                                             loading="lazy">--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="owl-controls">--}}
    {{--                                            <div class="owl-nav">--}}
    {{--                                                <div class="owl-prev style-Ik5P1" id="style-Ik5P1">--}}
    {{--                                                    prev--}}
    {{--                                                </div>--}}
    {{--                                                <div class="owl-next style-3BLR5" id="style-3BLR5">--}}
    {{--                                                    next--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <div class="owl-dots style-o1xhZ" id="style-o1xhZ">--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div data-full-width="true" data-full-width-init="true"--}}
    {{--                     class="row-fluid reset-sm-paddings custom_1451973500888 row-has-fill style-o1DoH" id="style-o1DoH">--}}
    {{--                    <div class="column column_container col-sm-12 col-lg-5 col-md-6">--}}
    {{--                        <div class="column-inner custom_1450444940366">--}}
    {{--                            <div class="wrapper">--}}
    {{--                                <h2 style="text-align: left" class="custom_heading">--}}
    {{--                                    What makes us special?--}}
    {{--                                </h2>--}}
    {{--                                <div class="text_column content_element ">--}}
    {{--                                    <div class="wrapper">--}}
    {{--                                        <p>--}}
    {{--                                            Over 42,000 dedicated employees, working in 17 regional clusters around the--}}
    {{--                                            globe, deliver operational excellence.--}}
    {{--                                        </p>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="row inner row-fluid reset-sm-paddings custom_1449127190171">--}}
    {{--                                    <div class="column column_container col-sm-6 col-xs-12">--}}
    {{--                                        <div class="column-inner custom_1450423994691">--}}
    {{--                                            <div class="wrapper">--}}
    {{--                                                <div class="stm_icon left icon_position_left">--}}
    {{--                                                    <div class="icon style-jBaQC" id="style-jBaQC">--}}
    {{--                                                        <i class="stm-packaging-and-storage">--}}
    {{--                                                        </i>--}}
    {{--                                                    </div>--}}
    {{--                                                    <div class="icon_text">--}}
    {{--                                                        <div class="title style-oxA1t" id="style-oxA1t">--}}
    {{--                                                            Packaging--}}
    {{--                                                            <br>--}}
    {{--                                                            and Storage--}}
    {{--                                                        </div>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="column column_container col-sm-6 col-xs-12">--}}
    {{--                                        <div class="column-inner custom_1450423999162">--}}
    {{--                                            <div class="wrapper">--}}
    {{--                                                <div class="stm_icon left icon_position_left">--}}
    {{--                                                    <div class="icon style-pnvdE" id="style-pnvdE">--}}
    {{--                                                        <i class="stm-warehousing-service">--}}
    {{--                                                        </i>--}}
    {{--                                                    </div>--}}
    {{--                                                    <div class="icon_text">--}}
    {{--                                                        <div class="title style-honw2" id="style-honw2">--}}
    {{--                                                            Warehousing--}}
    {{--                                                            <br>--}}
    {{--                                                            service--}}
    {{--                                                        </div>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="row inner row-fluid reset-sm-paddings custom_1449127193884">--}}
    {{--                                    <div class="column column_container col-sm-6 col-xs-12">--}}
    {{--                                        <div class="column-inner custom_1450424067703">--}}
    {{--                                            <div class="wrapper">--}}
    {{--                                                <div class="stm_icon left icon_position_left">--}}
    {{--                                                    <div class="icon style-Qiy3d" id="style-Qiy3d">--}}
    {{--                                                        <i class="stm-ground-transport">--}}
    {{--                                                        </i>--}}
    {{--                                                    </div>--}}
    {{--                                                    <div class="icon_text">--}}
    {{--                                                        <div class="title style-veokT" id="style-veokT">--}}
    {{--                                                            Ground--}}
    {{--                                                            <br>--}}
    {{--                                                            Transport--}}
    {{--                                                        </div>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="column column_container col-sm-6 col-xs-12">--}}
    {{--                                        <div class="column-inner custom_1450424075450">--}}
    {{--                                            <div class="wrapper">--}}
    {{--                                                <div class="stm_icon left icon_position_left">--}}
    {{--                                                    <div class="icon style-a7iJh" id="style-a7iJh">--}}
    {{--                                                        <i class="stm-logistic-services">--}}
    {{--                                                        </i>--}}
    {{--                                                    </div>--}}
    {{--                                                    <div class="icon_text">--}}
    {{--                                                        <div class="title style-iz5ss" id="style-iz5ss">--}}
    {{--                                                            Logistic--}}
    {{--                                                            <br>--}}
    {{--                                                            Services--}}
    {{--                                                        </div>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="column column_container col-sm-12 col-lg-7 col-md-6">--}}
    {{--                        <div class="column-inner custom_1451973486237">--}}
    {{--                            <div class="wrapper">--}}
    {{--                                <div class="row inner row-fluid reset-sm-paddings">--}}
    {{--                                    <div class="base_bg_color column column_container col-sm-12">--}}
    {{--                                        <div class="column-inner custom_1450423858601">--}}
    {{--                                            <div class="wrapper">--}}
    {{--                                                <h2 class="custom_heading style-wVWEd" id="style-wVWEd">--}}
    {{--                                                    Request a Free Quote--}}
    {{--                                                </h2>--}}
    {{--                                                <div class="wpcf7 js" id="f1322-p2-o1" lang="en-US" dir="ltr">--}}
    {{--                                                    <div class="screen-reader-response">--}}
    {{--                                                        <p role="status" aria-live="polite" aria-atomic="true">--}}
    {{--                                                        </p>--}}
    {{--                                                        <ul>--}}
    {{--                                                        </ul>--}}
    {{--                                                    </div>--}}
    {{--                                                    <form action="/#f1322-p2-o1" method="post" class="form init"--}}
    {{--                                                          aria-label="Contact form" novalidate="novalidate"--}}
    {{--                                                          data-status="init">--}}
    {{--                                                        <div id="style-kPXLN" class="style-kPXLN">--}}
    {{--                                                            <input type="hidden" name="wpcf7" value="1322">--}}
    {{--                                                            <input type="hidden" name="version" value="5.7.2">--}}
    {{--                                                            <input type="hidden" name="locale" value="en_US">--}}
    {{--                                                            <input type="hidden" name="unit_tag" value="f1322-p2-o1">--}}
    {{--                                                            <input type="hidden" name="container_post" value="2">--}}
    {{--                                                            <input type="hidden" name="posted_data_hash" value="">--}}
    {{--                                                        </div>--}}
    {{--                                                        <div class="request_quote">--}}
    {{--                                                            <div class="row">--}}
    {{--                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
    {{--                                                                    <div class="input-group">--}}
    {{--                                                                        <p>--}}
    {{--                                                                            <span class="form-control-wrap"--}}
    {{--                                                                                  data-name="freight_type">--}}
    {{--                                                                                <select class="form-control select select2-hidden-accessible"--}}
    {{--                                                                                        aria-invalid="false"--}}
    {{--                                                                                        name="freight_type"--}}
    {{--                                                                                        tabindex="-1"--}}
    {{--                                                                                        aria-hidden="true">--}}
    {{--                                                                                    <option value="">--}}
    {{--                                                                                        Freight Type--}}
    {{--                                                                                    </option>--}}
    {{--                                                                                    <option value="Road Transportation">--}}
    {{--                                                                                        Road Transportation--}}
    {{--                                                                                    </option>--}}
    {{--                                                                                    <option value="Air Transportation">--}}
    {{--                                                                                        Air Transportation--}}
    {{--                                                                                    </option>--}}
    {{--                                                                                    <option value="Sea Transportation">--}}
    {{--                                                                                        Sea Transportation--}}
    {{--                                                                                    </option>--}}
    {{--                                                                                    <option value="Warehousing">--}}
    {{--                                                                                        Warehousing--}}
    {{--                                                                                    </option>--}}
    {{--                                                                                </select>--}}
    {{--                                                                                <span class="select2 select2-container select2-container--default style-OPJMU"--}}
    {{--                                                                                      dir="ltr" id="style-OPJMU">--}}
    {{--                                                                                    <span class="selection">--}}
    {{--                                                                                        <span class="select2-selection select2-selection--single"--}}
    {{--                                                                                              role="combobox"--}}
    {{--                                                                                              aria-autocomplete="list"--}}
    {{--                                                                                              aria-haspopup="true"--}}
    {{--                                                                                              aria-expanded="false"--}}
    {{--                                                                                              tabindex="0"--}}
    {{--                                                                                              aria-labelledby="select2-freight_type-1p-container">--}}
    {{--                                                                                            <span class="select2-selection__rendered"--}}
    {{--                                                                                                  id="select2-freight_type-1p-container"--}}
    {{--                                                                                                  title="Freight Type">--}}
    {{--                                                                                                Freight Type--}}
    {{--                                                                                            </span>--}}
    {{--                                                                                            <span class="select2-selection__arrow"--}}
    {{--                                                                                                  role="presentation">--}}
    {{--                                                                                                <b role="presentation">--}}
    {{--                                                                                                </b>--}}
    {{--                                                                                            </span>--}}
    {{--                                                                                        </span>--}}
    {{--                                                                                    </span>--}}
    {{--                                                                                    <span class="dropdown-wrapper"--}}
    {{--                                                                                          aria-hidden="true">--}}
    {{--                                                                                    </span>--}}
    {{--                                                                                </span>--}}
    {{--                                                                            </span>--}}
    {{--                                                                        </p>--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <div class="input-group">--}}
    {{--                                                                        <p>--}}
    {{--                                                                            <span class="form-control-wrap"--}}
    {{--                                                                                  data-name="departure_city">--}}
    {{--                                                                                <input size="40"--}}
    {{--                                                                                       class="form-control text validates-as-required"--}}
    {{--                                                                                       aria-required="true"--}}
    {{--                                                                                       aria-invalid="false"--}}
    {{--                                                                                       placeholder="City of departure"--}}
    {{--                                                                                       value="" type="text"--}}
    {{--                                                                                       name="departure_city">--}}
    {{--                                                                            </span>--}}
    {{--                                                                        </p>--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <div class="input-group">--}}
    {{--                                                                        <p>--}}
    {{--                                                                            <span class="form-control-wrap"--}}
    {{--                                                                                  data-name="delivery_city">--}}
    {{--                                                                                <input size="40"--}}
    {{--                                                                                       class="form-control text"--}}
    {{--                                                                                       aria-invalid="false"--}}
    {{--                                                                                       placeholder="Delivery city"--}}
    {{--                                                                                       value="" type="text"--}}
    {{--                                                                                       name="delivery_city">--}}
    {{--                                                                            </span>--}}
    {{--                                                                        </p>--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <div class="input-group">--}}
    {{--                                                                        <p>--}}
    {{--                                                                            <span class="form-control-wrap"--}}
    {{--                                                                                  data-name="incoterms">--}}
    {{--                                                                                <select class="form-control select select2-hidden-accessible"--}}
    {{--                                                                                        aria-invalid="false"--}}
    {{--                                                                                        name="incoterms" tabindex="-1"--}}
    {{--                                                                                        aria-hidden="true">--}}
    {{--                                                                                    <option value="">--}}
    {{--                                                                                        Incoterms--}}
    {{--                                                                                    </option>--}}
    {{--                                                                                    <option value="EXW">--}}
    {{--                                                                                        EXW--}}
    {{--                                                                                    </option>--}}
    {{--                                                                                    <option value="FCA">--}}
    {{--                                                                                        FCA--}}
    {{--                                                                                    </option>--}}
    {{--                                                                                    <option value="CPT">--}}
    {{--                                                                                        CPT--}}
    {{--                                                                                    </option>--}}
    {{--                                                                                    <option value="CIP">--}}
    {{--                                                                                        CIP--}}
    {{--                                                                                    </option>--}}
    {{--                                                                                    <option value="DAT">--}}
    {{--                                                                                        DAT--}}
    {{--                                                                                    </option>--}}
    {{--                                                                                    <option value="DAP">--}}
    {{--                                                                                        DAP--}}
    {{--                                                                                    </option>--}}
    {{--                                                                                    <option value="DDP">--}}
    {{--                                                                                        DDP--}}
    {{--                                                                                    </option>--}}
    {{--                                                                                    <option value="FAS">--}}
    {{--                                                                                        FAS--}}
    {{--                                                                                    </option>--}}
    {{--                                                                                    <option value="FOB">--}}
    {{--                                                                                        FOB--}}
    {{--                                                                                    </option>--}}
    {{--                                                                                    <option value="CFR">--}}
    {{--                                                                                        CFR--}}
    {{--                                                                                    </option>--}}
    {{--                                                                                    <option value="CIF">--}}
    {{--                                                                                        CIF--}}
    {{--                                                                                    </option>--}}
    {{--                                                                                </select>--}}
    {{--                                                                                <span class="select2 select2-container select2-container--default style-zDTBc"--}}
    {{--                                                                                      dir="ltr" id="style-zDTBc">--}}
    {{--                                                                                    <span class="selection">--}}

    {{--                                                                                        <span class="select2-selection select2-selection--single"--}}
    {{--                                                                                              role="combobox"--}}
    {{--                                                                                              aria-autocomplete="list"--}}
    {{--                                                                                              aria-haspopup="true"--}}
    {{--                                                                                              aria-expanded="false"--}}
    {{--                                                                                              tabindex="0"--}}
    {{--                                                                                              aria-labelledby="select2-incoterms-jv-container">--}}
    {{--                                                                                            <span class="select2-selection__rendered"--}}
    {{--                                                                                                  id="select2-incoterms-jv-container"--}}
    {{--                                                                                                  title="Incoterms">--}}
    {{--                                                                                                Incoterms--}}
    {{--                                                                                            </span>--}}
    {{--                                                                                            <span class="select2-selection__arrow"--}}
    {{--                                                                                                  role="presentation">--}}
    {{--                                                                                                <b role="presentation">--}}
    {{--                                                                                                </b>--}}
    {{--                                                                                            </span>--}}
    {{--                                                                                        </span>--}}
    {{--                                                                                    </span>--}}
    {{--                                                                                    <span class="dropdown-wrapper"--}}
    {{--                                                                                          aria-hidden="true">--}}
    {{--                                                                                    </span>--}}
    {{--                                                                                </span>--}}
    {{--                                                                            </span>--}}
    {{--                                                                        </p>--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <div class="input-group">--}}
    {{--                                                                        <p>--}}
    {{--                                                                            <span class="form-control-wrap"--}}
    {{--                                                                                  data-name="total_weight">--}}
    {{--                                                                                <input size="40"--}}
    {{--                                                                                       class="form-control text"--}}
    {{--                                                                                       aria-invalid="false"--}}
    {{--                                                                                       placeholder="Total gross weight (KG)"--}}
    {{--                                                                                       value="" type="text"--}}
    {{--                                                                                       name="total_weight">--}}
    {{--                                                                            </span>--}}
    {{--                                                                        </p>--}}
    {{--                                                                    </div>--}}
    {{--                                                                </div>--}}
    {{--                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
    {{--                                                                    <div class="input-group">--}}
    {{--                                                                        <p>--}}
    {{--                                                                            <span class="form-control-wrap"--}}
    {{--                                                                                  data-name="dimension">--}}
    {{--                                                                                <input size="40"--}}
    {{--                                                                                       class="form-control text"--}}
    {{--                                                                                       aria-invalid="false"--}}
    {{--                                                                                       placeholder="Dimension" value=""--}}
    {{--                                                                                       type="text" name="dimension">--}}
    {{--                                                                            </span>--}}
    {{--                                                                        </p>--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <div class="input-group">--}}
    {{--                                                                        <p>--}}
    {{--                                                                            <span class="form-control-wrap"--}}
    {{--                                                                                  data-name="email">--}}
    {{--                                                                                <input size="40"--}}
    {{--                                                                                       class="form-control text email validates-as-required validates-as-email"--}}
    {{--                                                                                       aria-required="true"--}}
    {{--                                                                                       aria-invalid="false"--}}
    {{--                                                                                       placeholder="Email" value=""--}}
    {{--                                                                                       type="email" name="email">--}}
    {{--                                                                            </span>--}}
    {{--                                                                        </p>--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <div class="input-group">--}}
    {{--                                                                        <p>--}}
    {{--                                                                            <span class="form-control-wrap"--}}
    {{--                                                                                  data-name="message">--}}
    {{--                                                                                <textarea cols="40" rows="10"--}}
    {{--                                                                                          class="form-control textarea"--}}
    {{--                                                                                          aria-invalid="false"--}}
    {{--                                                                                          placeholder="Message"--}}
    {{--                                                                                          name="message">--}}
    {{--                                                                                </textarea>--}}
    {{--                                                                            </span>--}}
    {{--                                                                        </p>--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <div class="input-group">--}}
    {{--                                                                        <p>--}}
    {{--                                                                            <button class="button size-sm fullwidth theme-submit">--}}
    {{--                                                                                Submit--}}
    {{--                                                                                <i class="stm-arrow-next">--}}
    {{--                                                                                </i>--}}
    {{--                                                                            </button>--}}
    {{--                                                                        </p>--}}
    {{--                                                                    </div>--}}
    {{--                                                                </div>--}}
    {{--                                                            </div>--}}
    {{--                                                        </div>--}}
    {{--                                                        <p id="style-JqhQV" class="style-JqhQV">--}}
    {{--                                                            <label>--}}
    {{--                                                                Δ--}}
    {{--                                                                <textarea name="ak_hp_textarea" cols="45" rows="8"--}}
    {{--                                                                          maxlength="100">--}}
    {{--                                                                </textarea>--}}
    {{--                                                            </label>--}}
    {{--                                                            <input type="hidden" id="ak_js_1" name="ak_js"--}}
    {{--                                                                   value="1694589501213">--}}
    {{--                                                        </p>--}}
    {{--                                                        <div class="response-output" aria-hidden="true">--}}
    {{--                                                        </div>--}}
    {{--                                                    </form>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="row-full-width">--}}
    {{--                </div>--}}
    {{--            </article>--}}
    {{--        </article>--}}
    {{--    <div class="row-full-width">--}}
    {{--        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7450.9429371919005!2d105.75678!3d20.97373!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1694508342108!5m2!1svi!2s"--}}
    {{--                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"--}}
    {{--                referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
    {{--    </div>--}}
@endsection

