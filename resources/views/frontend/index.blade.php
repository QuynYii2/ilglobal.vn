@extends('frontend.layouts.master')
@section('title', 'Home page')
@section('main-content')

    {{--<div class="full-screen-preview">--}}
    {{--    <iframe class="full-screen-preview__frame" src="https://logistics.stylemixthemes.com/?" name="preview-frame"--}}
    {{--            frameborder="0" noresize="noresize" data-view="fullScreenPreview"--}}
    {{--            allow="geolocation 'self'; autoplay 'self'">--}}
    {{--    </iframe>--}}
    {{--    <div id="affiliate-tracker" class="is-hidden" data-view="affiliatesTracker" data-cookiebot-enabled="true">--}}
    {{--    </div>--}}
    {{--    <iframe name="__uspapiLocator" tabindex="-1" role="presentation" aria-hidden="true" title="Blank">--}}
    {{--    </iframe>--}}
    {{--    <iframe allow="join-ad-interest-group" data-tagging-id="AW-943617023" data-load-time="1694408158808" height="0"--}}
    {{--            width="0"--}}
    {{--            src="https://td.doubleclick.net/td/rul/943617023?random=1694408158803&amp;cv=11&amp;fst=1694408158803&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45He3960&amp;u_w=1920&amp;u_h=1080&amp;url=https%3A%2F%2Fpreview.themeforest.net%2Fitem%2Ftranscargo-logistics-transportation-wp-theme%2Ffull_screen_preview%2F13947082%3F_ga%3D2.140270579.1516902346.1690525897-1230148869.1690525897&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Transcargo%20-%20Transportation%20WordPress%20Theme%20for%20Logistics%20Preview%20-%20ThemeForest&amp;us_privacy=1---&amp;auid=20780158.1690532788&amp;fledge=1&amp;uaa=x86&amp;uab=64&amp;uafvl=Chromium%3B116.0.5845.180%7CNot)A%253BBrand%3B24.0.0.0%7CGoogle%2520Chrome%3B116.0.5845.180&amp;uamb=0&amp;uap=Windows&amp;uapv=15.0.0&amp;uaw=0">--}}
    {{--    </iframe>--}}
    {{--    <iframe tabindex="-1" role="presentation" aria-hidden="true" title="Blank"--}}
    {{--            src="https://consentcdn.cookiebot.com/sdk/bc-v4.min.html">--}}
    {{--    </iframe>--}}
    {{--    <div id="batBeacon66982743182">--}}
    {{--        <img id="batBeacon394874257857" width="0" height="0" alt=""--}}
    {{--             src="https://bat.bing.com/action/0?ti=16005611&amp;tm=gtm002&amp;Ver=2&amp;mid=fd9b0633-5587-4b26-80ea-eb2040f12623&amp;sid=4a81a480505d11ee9cac83ba0d8e7fb6&amp;vid=728432902d2011ee84db2f5ae932f5d5&amp;vids=0&amp;msclkid=N&amp;uach=pv%3D15.0.0&amp;pi=918639831&amp;lg=en-US&amp;sw=1920&amp;sh=1080&amp;sc=24&amp;tl=Transcargo%20-%20Transportation%20WordPress%20Theme%20for%20Logistics%20Preview%20-%20ThemeForest&amp;p=https%3A%2F%2Fpreview.themeforest.net%2Fitem%2Ftranscargo-logistics-transportation-wp-theme%2Ffull_screen_preview%2F13947082%3F_ga%3D2.140270579.1516902346.1690525897-1230148869.1690525897&amp;r=&amp;lt=2171&amp;evt=pageLoad&amp;sv=1&amp;rn=976095">--}}
    {{--    </div>--}}

    {{--</div>--}}
    <div>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active"> <img src="http://bootstraplily.com/demo/detto-ui-kit/img/intro-one/slider-one.jpg" class="d-block w-100" alt="...">
                <div class="background-overlay"></div>
                <div class="carousel-caption">
                    <h5 class="display-4 h4-md mb-4 font-weight-bold">A modular UI Kit for Bootstrap</h5>
                    <p class="h4 mb-5 pb-3 text-white-50">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    <a href="" class="btn btn-lg btn-danger">View More</a> </div>
            </div>
            <div class="carousel-item"> <img src="http://bootstraplily.com/demo/detto-ui-kit/img/intro-one/slider-two.jpg" class="d-block w-100" alt="...">
                <div class="background-overlay"></div>
                <div class="carousel-caption">
                    <h5 class="display-4 mb-4 font-weight-bold">A modular UI Kit for Startups</h5>
                    <p class="h4 mb-5 pb-3 text-white-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="" class="btn btn-lg btn-danger">View More</a> </div>
            </div>
            <div class="carousel-item"> <img src="http://bootstraplily.com/demo/detto-ui-kit/img/intro-one/slider-three.jpg" class="d-block w-100" alt="...">
                <div class="background-overlay"></div>
                <div class="carousel-caption">
                    <h5 class="display-4 mb-4 font-weight-bold">A modular UI Kit for Development</h5>
                    <p class="h4 mb-5 pb-3 text-white-50">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    <a href="" class="btn btn-lg btn-danger">View More</a> </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>

        <div data-full-width="true" data-full-width-init="true"
             class="row row-fluid base_bg_color body custom_1450269319951 style-DdbYJ" id="style-DdbYJ">
            <div class="column column_container col-sm-12">
                <div class="  column-inner">
                    <div class="wrapper">
                        <div class="services">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <h2>
                                    <span id="style-zpftD" class="style-zpftD">
                                      Special Services
                                    </span>
                                    </h2>
                                    <p>
                                    <span id="style-EleNQ" class="style-EleNQ">
                                      Globally known for our ability to handle every last detail of our customers’ particular logistics and forwarding needs, TransCargo’s Special Services team takes care of all your logistics.
                                    </span>
                                    </p>
                                    <div class="owl-dots" id="owl-nav-64ffebdaae497">
                                        <div class="owl-dot">
                                            <span></span>
                                        </div>
                                        <div class="owl-dot"><span></span></div>
                                        <div class="owl-dot active"><span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="  services_carousel_wr">
                                        <div class="  services_carousel owl-carousel owl-theme owl-loaded"
                                             id="owl-64ffebdaae495">
                                            <div class="owl-stage-outer">
                                                <div class="owl-stage style-HWPSV" id="style-HWPSV">
                                                    <div class="owl-item style-IXBRQ" id="style-IXBRQ">
                                                        <div class="item">
                                                            <div class="item_wr">
                                                                <div class="item_thumbnail">
                                                                    <a href="https://logistics.stylemixthemes.com/services/showfreight-2/"
                                                                       data-wpel-link="internal">
                                                                        <img width="255" height="170"
                                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/dreamstime_xxl_20955694-255x170.jpg"
                                                                             class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"
                                                                             alt="" decoding="async">
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        <a href="https://logistics.stylemixthemes.com/services/showfreight-2/"
                                                                           data-wpel-link="internal">
                                                                            Cargo Insurance
                                                                        </a>
                                                                    </h6>
                                                                    <p>
                                                                        Provides a scalable and customizable solution
                                                                        for customers who have programs to retire
                                                                        outdated IT assets.
                                                                    </p>
                                                                    <a href="https://logistics.stylemixthemes.com/services/showfreight-2/"
                                                                       class="read_more" data-wpel-link="internal">
                                                                        <em>
                                                                            read more
                                                                        </em>
                                                                        <span>
                                                                        →
                                                                    </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item style-h5xOH" id="style-h5xOH">
                                                        <div class="item">
                                                            <div class="item_wr">
                                                                <div class="item_thumbnail">
                                                                    <a href="https://logistics.stylemixthemes.com/services/asset-recovery-2/"
                                                                       data-wpel-link="internal">
                                                                        <img width="255" height="170"
                                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_54040023_Subscription_Monthly_M-255x170.jpg"
                                                                             class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"
                                                                             alt="" decoding="async" loading="lazy">
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        <a href="https://logistics.stylemixthemes.com/services/asset-recovery-2/"
                                                                           data-wpel-link="internal">
                                                                            Car Transportation
                                                                        </a>
                                                                    </h6>
                                                                    <p>
                                                                        Provides a scalable and customizable solution
                                                                        for customers who have programs to retire
                                                                        outdated IT assets.
                                                                    </p>
                                                                    <a href="https://logistics.stylemixthemes.com/services/asset-recovery-2/"
                                                                       class="read_more" data-wpel-link="internal">
                                                                        <em>
                                                                            read more
                                                                        </em>
                                                                        <span>
                                                                        →
                                                                    </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item style-iTtOU" id="style-iTtOU">
                                                        <div class="item">
                                                            <div class="item_wr">
                                                                <div class="item_thumbnail">
                                                                    <a href="https://logistics.stylemixthemes.com/services/multimodal-transport/"
                                                                       data-wpel-link="internal">
                                                                        <img width="255" height="170"
                                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_91953311_Subscription_Monthly_M-255x170.jpg"
                                                                             class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"
                                                                             alt="" decoding="async" loading="lazy">
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        <a href="https://logistics.stylemixthemes.com/services/multimodal-transport/"
                                                                           data-wpel-link="internal">
                                                                            Multimodal Transport
                                                                        </a>
                                                                    </h6>
                                                                    <p>
                                                                        Combined rail road transport is particularly
                                                                        well suited to the shipping of hazardous goods
                                                                        since it reduces risk.
                                                                    </p>
                                                                    <a href="https://logistics.stylemixthemes.com/services/multimodal-transport/"
                                                                       class="read_more" data-wpel-link="internal">
                                                                        <em>
                                                                            read more
                                                                        </em>
                                                                        <span>
                                                                        →
                                                                    </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item style-mIyOU" id="style-mIyOU">
                                                        <div class="item">
                                                            <div class="item_wr">
                                                                <div class="item_thumbnail">
                                                                    <a href="https://logistics.stylemixthemes.com/services/sea-freight-2/"
                                                                       data-wpel-link="internal">
                                                                        <img width="255" height="170"
                                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_66820150_Subscription_Monthly_M-255x170.jpg"
                                                                             class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"
                                                                             alt="" decoding="async" loading="lazy">
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        <a href="https://logistics.stylemixthemes.com/services/sea-freight-2/"
                                                                           data-wpel-link="internal">
                                                                            Road Freight
                                                                        </a>
                                                                    </h6>
                                                                    <p>
                                                                        To best support your ever-changing logistics
                                                                        needs, we are continuously evolving our
                                                                        transportation services.
                                                                    </p>
                                                                    <a href="https://logistics.stylemixthemes.com/services/sea-freight-2/"
                                                                       class="read_more" data-wpel-link="internal">
                                                                        <em>
                                                                            read more
                                                                        </em>
                                                                        <span>
                                                                        →
                                                                    </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item style-qy1yR" id="style-qy1yR">
                                                        <div class="item">
                                                            <div class="item_wr">
                                                                <div class="item_thumbnail">
                                                                    <a href="https://logistics.stylemixthemes.com/services/sea-freight/"
                                                                       data-wpel-link="internal">
                                                                        <img width="255" height="170"
                                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_70457153_Subscription_Monthly_M-255x170.jpg"
                                                                             class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"
                                                                             alt="" decoding="async" loading="lazy">
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        <a href="https://logistics.stylemixthemes.com/services/sea-freight/"
                                                                           data-wpel-link="internal">
                                                                            Sea Freight
                                                                        </a>
                                                                    </h6>
                                                                    <p>
                                                                        Sea-Air cargo is the last to be loaded and the
                                                                        first to be unloaded, reducing transshipment
                                                                        times and risk.
                                                                    </p>
                                                                    <a href="https://logistics.stylemixthemes.com/services/sea-freight/"
                                                                       class="read_more" data-wpel-link="internal">
                                                                        <em>
                                                                            read more
                                                                        </em>
                                                                        <span>
                                                                        →
                                                                    </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item style-BU8kA" id="style-BU8kA">
                                                        <div class="item">
                                                            <div class="item_wr">
                                                                <div class="item_thumbnail">
                                                                    <a href="https://logistics.stylemixthemes.com/services/air-freight/"
                                                                       data-wpel-link="internal">
                                                                        <img width="255" height="170"
                                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_44261036_Subscription_Monthly_XL-255x170.jpg"
                                                                             class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"
                                                                             alt="" decoding="async" loading="lazy">
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        <a href="https://logistics.stylemixthemes.com/services/air-freight/"
                                                                           data-wpel-link="internal">
                                                                            Air Freight
                                                                        </a>
                                                                    </h6>
                                                                    <p>
                                                                        Our AIRFAST services have been designed for
                                                                        customers who need their goods delivered
                                                                        urgently.
                                                                    </p>
                                                                    <a href="https://logistics.stylemixthemes.com/services/air-freight/"
                                                                       class="read_more" data-wpel-link="internal">
                                                                        <em>
                                                                            read more
                                                                        </em>
                                                                        <span>
                                                                        →
                                                                    </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item active style-7roFG" id="style-7roFG">
                                                        <div class="item">
                                                            <div class="item_wr">
                                                                <div class="item_thumbnail">
                                                                    <a href="https://logistics.stylemixthemes.com/services/packaging-and-storage/"
                                                                       data-wpel-link="internal">
                                                                        <img width="255" height="170"
                                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_77985301_Subscription_Monthly_M-255x170.jpg"
                                                                             class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"
                                                                             alt="" decoding="async" loading="lazy">
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        <a href="https://logistics.stylemixthemes.com/services/packaging-and-storage/"
                                                                           data-wpel-link="internal">
                                                                            Packaging and Storage
                                                                        </a>
                                                                    </h6>
                                                                    <p>
                                                                        You can opt for dedicated platforms from the
                                                                        advantages related to shared surfaces, resources
                                                                        and equipment.
                                                                    </p>
                                                                    <a href="https://logistics.stylemixthemes.com/services/packaging-and-storage/"
                                                                       class="read_more" data-wpel-link="internal">
                                                                        <em>
                                                                            read more
                                                                        </em>
                                                                        <span>
                                                                        →
                                                                    </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item active style-jJjLk" id="style-jJjLk">
                                                        <div class="item">
                                                            <div class="item_wr">
                                                                <div class="item_thumbnail">
                                                                    <a href="https://logistics.stylemixthemes.com/services/freight-forwarding/"
                                                                       data-wpel-link="internal">
                                                                        <img width="255" height="170"
                                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_85388194_Subscription_Monthly_M-255x170.jpg"
                                                                             class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"
                                                                             alt="" decoding="async" loading="lazy">
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        <a href="https://logistics.stylemixthemes.com/services/freight-forwarding/"
                                                                           data-wpel-link="internal">
                                                                            Freight Forwarding
                                                                        </a>
                                                                    </h6>
                                                                    <p>
                                                                        With a global presence in 67 countries,
                                                                        TransCargo is one of the world’s largest freight
                                                                        forwarding companies.
                                                                    </p>
                                                                    <a href="https://logistics.stylemixthemes.com/services/freight-forwarding/"
                                                                       class="read_more" data-wpel-link="internal">
                                                                        <em>
                                                                            read more
                                                                        </em>
                                                                        <span>
                                                                        →
                                                                    </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item active style-Rd9g3" id="style-Rd9g3">
                                                        <div class="item">
                                                            <div class="item_wr">
                                                                <div class="item_thumbnail">
                                                                    <a href="https://logistics.stylemixthemes.com/services/supply-chain-solutions/"
                                                                       data-wpel-link="internal">
                                                                        <img width="255" height="170"
                                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_72572617_Subscription_Monthly_M-255x170.jpg"
                                                                             class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"
                                                                             alt="" decoding="async" loading="lazy">
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <h6>
                                                                        <a href="https://logistics.stylemixthemes.com/services/supply-chain-solutions/"
                                                                           data-wpel-link="internal">
                                                                            Supply Chain Solutions
                                                                        </a>
                                                                    </h6>
                                                                    <p>
                                                                        Provides a scalable and customizable solution
                                                                        for customers who have programs to retire
                                                                        outdated IT assets.
                                                                    </p>
                                                                    <a href="https://logistics.stylemixthemes.com/services/supply-chain-solutions/"
                                                                       class="read_more" data-wpel-link="internal">
                                                                        <em>
                                                                            read more
                                                                        </em>
                                                                        <span>
                                                                        →
                                                                    </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-controls">
                                                <div class="owl-nav">
                                                    <div class="owl-prev style-74xEv" id="style-74xEv">
                                                        prev
                                                    </div>
                                                    <div class="owl-next style-SV2sb" id="style-SV2sb">
                                                        next
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-full-width="true" data-full-width-init="true" data-parallax="3"
             data-parallax-image="https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/bg-cta-2.jpg"
             class="row row-fluid convert_to_table overlay custom_1450437407937 row-has-fill row-o-equal-height row-flex general parallax parallax-content-moving"
             style="position: relative; box-sizing: border-box; padding-left: 390px; padding-right: 390px;">
            <div class="column   column_container   col-sm-7">
                <div class="  column-inner   custom_1450330273622">
                    <div class="wrapper"><h2 style="text-align: left"
                                             class="  custom_heading base_font_color heading_without_line">
                            Reach your destination 100% sure and safe</h2>
                        <div class="text_column content_element ">
                            <div class="wrapper">
                                <p><span style="color: #404040;">We designed a detailed homepage
layouts that will fit any transportation industry size. We will take
care of your cargo or your pasenger and deliver them safe and on time!</span></p>

                            </div>
                        </div>
                        <div class="  btn3-container   btn3-inline"><a
                                    class="  general   btn3   btn3-size-md   btn3-shape-round   btn3-style-flat   btn3-icon-right   btn3-color-theme_style_3"
                                    href="https://logistics.stylemixthemes.com/contacts/" title="Contacts"
                                    data-wpel-link="internal">Contact Now <i
                                        class="  btn3-icon stm-arrow-next"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="column   column_container   col-sm-5   hidden-md   hidden-sm   hidden-xs   col-has-fill">
                <div class="  column-inner   custom_1450446256472">
                    <div class="wrapper"></div>
                </div>
            </div>
            <div class="  parallax-inner skrollable skrollable-before"
                 style="height: 300%; background-image: url(  https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/bg-cta-2.jpg  ); top: -200%;"
                 data-bottom-top="top: -200%;" data-top-bottom="top: 0%;"></div>
        </div>

        <div class="row row row-fluid custom_1451973457656">
            <div class="column column_container col-sm-12 col-lg-6 col-md-7">
                <div class="column-inner custom_1450446299241">
                    <div class="wrapper"><h2 style="text-align: left"
                                             class="custom_heading custom_1450337112571">Latest
                            News</h2>
                        <div class="news">
                            <ul class="news_list owl-carousel owl-theme owl-loaded" id="owl-64fed512f387a">


                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                         style="transform: translate3d(-1120px, 0px, 0px); transition: all 0.25s ease 0s; width: 1680px;">
                                        <div class="owl-item" style="width: 540px; margin-right: 20px;">
                                            <li>
                                                <div class="news_thumbnail">
                                                    <a href="https://logistics.stylemixthemes.com/face-the-challenges-of-increasing-chain-complexity/"
                                                       data-wpel-link="internal">
                                                        <img width="270" height="330"
                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_86085293_Subscription_Monthly_M-270x330.jpg"
                                                             class="attachment-transcargo-image-270x330-croped size-transcargo-image-270x330-croped wp-post-image"
                                                             alt="" decoding="async" loading="lazy"> </a>
                                                    <div class="date">
                                                        <div class="day">26</div>
                                                        <div class="month">Nov</div>
                                                    </div>
                                                </div>
                                                <div class="news_content">
                                                    <h4>
                                                        <a href="https://logistics.stylemixthemes.com/face-the-challenges-of-increasing-chain-complexity/"
                                                           data-wpel-link="internal">Face the challenges of
                                                            chain complexity</a></h4>
                                                    <p>Established in 2005, the group has grown to over 30
                                                        people and has completed 900 projects</p>
                                                    <a href="https://logistics.stylemixthemes.com/face-the-challenges-of-increasing-chain-complexity/"
                                                       class="read_more" data-wpel-link="internal"><em>learn
                                                            more</em><span>→</span></a>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item" style="width: 540px; margin-right: 20px;">
                                            <li>
                                                <div class="news_thumbnail">
                                                    <a href="https://logistics.stylemixthemes.com/we-join-the-environmental-organization-ccwg/"
                                                       data-wpel-link="internal">
                                                        <img width="270" height="330"
                                                             src="./Fotolia_43887394_Subscription_Monthly_M-270x330.jpg"
                                                             class="attachment-transcargo-image-270x330-croped size-transcargo-image-270x330-croped wp-post-image"
                                                             alt="" decoding="async" loading="lazy"> </a>
                                                    <div class="date">
                                                        <div class="day">24</div>
                                                        <div class="month">Nov</div>
                                                    </div>
                                                </div>
                                                <div class="news_content">
                                                    <h4>
                                                        <a href="https://logistics.stylemixthemes.com/we-join-the-environmental-organization-ccwg/"
                                                           data-wpel-link="internal">We join the
                                                            environmental organization CCWG</a></h4>
                                                    <p>Global leaders in marine container transport, create
                                                        and use practical tools for measuring</p>
                                                    <a href="https://logistics.stylemixthemes.com/we-join-the-environmental-organization-ccwg/"
                                                       class="read_more" data-wpel-link="internal"><em>learn
                                                            more</em><span>→</span></a>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item active"
                                             style="width: 540px; margin-right: 20px;">
                                            <li>
                                                <div class="news_thumbnail">
                                                    <a href="https://logistics.stylemixthemes.com/tianjin-port-came-to-a-halt-after-explosions/"
                                                       data-wpel-link="internal">
                                                        <img width="270" height="330"
                                                             src="./Fotolia_77985301_Subscription_Monthly_M-270x330.jpg"
                                                             class="attachment-transcargo-image-270x330-croped size-transcargo-image-270x330-croped wp-post-image"
                                                             alt="" decoding="async" loading="lazy"> </a>
                                                    <div class="date">
                                                        <div class="day">23</div>
                                                        <div class="month">Nov</div>
                                                    </div>
                                                </div>
                                                <div class="news_content">
                                                    <h4>
                                                        <a href="https://logistics.stylemixthemes.com/tianjin-port-came-to-a-halt-after-explosions/"
                                                           data-wpel-link="internal">Tianjin Port Came to a
                                                            Halt after Explosions</a></h4>
                                                    <p>The explosion at Binhai Ocean Port in Tianjin caused
                                                        severe damage to many warehouses</p>
                                                    <a href="https://logistics.stylemixthemes.com/tianjin-port-came-to-a-halt-after-explosions/"
                                                       class="read_more" data-wpel-link="internal"><em>learn
                                                            more</em><span>→</span></a>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-controls">
                                    <div class="owl-nav">
                                        <div class="owl-prev" style="display: none;">prev</div>
                                        <div class="owl-next" style="display: none;">next</div>
                                    </div>
                                </div>
                            </ul>
                            <div class="news_footer">
                                <div class="owl-dots" id="owl-nav-64fed512f387c">
                                    <div class="owl-dot"><span></span></div>
                                    <div class="owl-dot"><span></span></div>
                                    <div class="owl-dot active"><span></span></div>
                                </div>
                                <a class="button size-sm icon_right" href="#" target="_self">
                                    all news <i class="stm-arrow-next"></i>
                                </a>
                            </div>
                            <script type="text/javascript">
                                jQuery(document).ready(function ($) {
                                    $("#owl-64fed512f387a").owlCarousel({
                                        dotsContainer: '#owl-nav-64fed512f387c',
                                        items: 1,
                                        margin: 20,
                                        autoplay: true,
                                        autoplayTimeout: 5000,
                                        smartSpeed: 250
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column column_container col-sm-12 col-lg-6 col-md-5">
                <div class="column-inner custom_1450446304318">
                    <div class="wrapper"><h2 style="text-align: left"
                                             class="custom_heading custom_1450337066920">FAQ</h2>
                        <div class="tta-container" data-action="collapse">
                            <div class="general tta tta-accordion tta-color-theme_style tta-style-outline tta-shape-square tta-o-shape-group tta-controls-align-left tta-o-no-fill">
                                <div class="tta-panels-container">
                                    <div class="tta-panels">
                                        <div class="tta-panel active" id="1450333286729-b84bb545-f459"
                                             data-content=".tta-panel-body">
                                            <div class="tta-panel-heading"><h4
                                                        class="tta-panel-title tta-controls-icon-position-right">
                                                    <a href="#1450333286729-b84bb545-f459" data-accordion=""
                                                       data-container=".tta-container"><span
                                                                class="tta-title-text">How many times do i have to tell you a few ways?</span><i
                                                                class="tta-controls-icon tta-controls-icon-chevron"></i></a>
                                                </h4></div>
                                            <div class="tta-panel-body">
                                                <div class="text_column content_element ">
                                                    <div class="wrapper">
                                                        <p>Progressively generate synergistic total linkage
                                                            through
                                                            cross-media intellectual capital.
                                                            Enthusiastically parallel task team
                                                            building e-tailers without standards compliant
                                                            initiatives.
                                                            Progressively monetize client-centric
                                                            outsourcing with excellent
                                                            communities.</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tta-panel" id="1450333395266-cee3f8a0-cdaa"
                                             data-content=".tta-panel-body">
                                            <div class="tta-panel-heading"><h4
                                                        class="tta-panel-title tta-controls-icon-position-right">
                                                    <a href="#1450333395266-cee3f8a0-cdaa" data-accordion=""
                                                       data-container=".tta-container"><span
                                                                class="tta-title-text">What is do i have to tell you a few lorem?</span><i
                                                                class="tta-controls-icon tta-controls-icon-chevron"></i></a>
                                                </h4></div>
                                            <div class="tta-panel-body">
                                                <div class="text_column content_element ">
                                                    <div class="wrapper">
                                                        <p>Progressively generate synergistic total linkage
                                                            through
                                                            cross-media intellectual capital.
                                                            Enthusiastically parallel task team
                                                            building e-tailers without standards compliant
                                                            initiatives.
                                                            Progressively monetize client-centric
                                                            outsourcing with excellent
                                                            communities.</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tta-panel" id="1450333393575-560e10ae-d671"
                                             data-content=".tta-panel-body">
                                            <div class="tta-panel-heading"><h4
                                                        class="tta-panel-title tta-controls-icon-position-right">
                                                    <a href="#1450333393575-560e10ae-d671" data-accordion=""
                                                       data-container=".tta-container"><span
                                                                class="tta-title-text">I have a technical problem or support issue I need resolved, who do I email?</span><i
                                                                class="tta-controls-icon tta-controls-icon-chevron"></i></a>
                                                </h4></div>
                                            <div class="tta-panel-body">
                                                <div class="text_column content_element ">
                                                    <div class="wrapper">
                                                        <p>Progressively generate synergistic total linkage
                                                            through
                                                            cross-media intellectual capital.
                                                            Enthusiastically parallel task team
                                                            building e-tailers without standards compliant
                                                            initiatives.
                                                            Progressively monetize client-centric
                                                            outsourcing with excellent
                                                            communities.</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tta-panel" id="1450333390085-ccbb2f35-ff19"
                                             data-content=".tta-panel-body">
                                            <div class="tta-panel-heading"><h4
                                                        class="tta-panel-title tta-controls-icon-position-right">
                                                    <a href="#1450333390085-ccbb2f35-ff19" data-accordion=""
                                                       data-container=".tta-container"><span
                                                                class="tta-title-text">What other services are you compatible with?</span><i
                                                                class="tta-controls-icon tta-controls-icon-chevron"></i></a>
                                                </h4></div>
                                            <div class="tta-panel-body">
                                                <div class="text_column content_element ">
                                                    <div class="wrapper">
                                                        <p>Progressively generate synergistic total linkage
                                                            through
                                                            cross-media intellectual capital.
                                                            Enthusiastically parallel task team
                                                            building e-tailers without standards compliant
                                                            initiatives.
                                                            Progressively monetize client-centric
                                                            outsourcing with excellent
                                                            communities.</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tta-panel" id="1450333387414-6ded1f9e-e822"
                                             data-content=".tta-panel-body">
                                            <div class="tta-panel-heading"><h4
                                                        class="tta-panel-title tta-controls-icon-position-right">
                                                    <a href="#1450333387414-6ded1f9e-e822" data-accordion=""
                                                       data-container=".tta-container"><span
                                                                class="tta-title-text">Are you hiring?</span><i
                                                                class="tta-controls-icon tta-controls-icon-chevron"></i></a>
                                                </h4></div>
                                            <div class="tta-panel-body">
                                                <div class="text_column content_element ">
                                                    <div class="wrapper">
                                                        <p>Progressively generate synergistic total linkage
                                                            through
                                                            cross-media intellectual capital.
                                                            Enthusiastically parallel task team
                                                            building e-tailers without standards compliant
                                                            initiatives.
                                                            Progressively monetize client-centric
                                                            outsourcing with excellent
                                                            communities.</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div data-full-width="true" data-full-width-init="true" data-stretch-content="true"
             class="  row row   row-fluid   custom_1450356826637   row-no-padding"
             style="position: relative; box-sizing: border-box;">
            <div class="column   column_container   col-sm-12">
                <div class="  column-inner">
                    <div class="wrapper">
                        <div class="vc_testimonials style_2 style-WFOPq" id="owl_wr_6500339e8e5a1">
                            <div class="container">
                                <div class="vc_testimonials_carousel_wr">
                                    <div class="vc_testimonials_carousel owl-carousel owl-theme owl-loaded"
                                         id="owl_6500339e8e5a2">
                                        <div class="owl-stage-outer owl-height style-8OlbQ" id="style-8OlbQ">
                                            <div class="owl-stage style-OvRC7" id="style-OvRC7">
                                                <div class="owl-item cloned width" id="width">
                                                    <div class="item"
                                                         data-image="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/testimonial_bg_image_2.jpg">
                                                        <p>
                                                            I’ve been happy with the services provided by TransCargo
                                                            LLC. Samantha Culligan has been wonderful! She has returned
                                                            my calls quickly, and she answered all my questions!
                                                        </p>
                                                        <div class="sep">
                                                            <i class="stm-testimonials-new-2">
                                                            </i>
                                                        </div>
                                                        <div class="testimonial_info">
                                                            <h6>
                                                                Anna Briggs
                                                            </h6>
                                                            <div class="position">
                                                                CEO, Smart Move Ltd.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item cloned width" id="width">
                                                    <div class="item"
                                                         data-image="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/testimonial_bg_image_3.jpg">
                                                        <p>
                                                            This is due to their excellent service, competitive pricing
                                                            and customer support. That’s becoming so distant and
                                                            digital, it’s throughly refreshing to get such a personal
                                                            touch.
                                                        </p>
                                                        <div class="sep">
                                                            <i class="stm-testimonials-new-2">
                                                            </i>
                                                        </div>
                                                        <div class="testimonial_info">
                                                            <h6>
                                                                Jonathan Adams
                                                            </h6>
                                                            <div class="position">
                                                                Founder, Great Wall Ltd.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item width" id="width">
                                                    <div class="item"
                                                         data-image="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/testimonial_bg_image.jpg">
                                                        <p>
                                                            We were previously using an unreliable company with a very
                                                            complicated registration and transfer process. Then we found
                                                            TransCargo and the control came back to us.
                                                        </p>
                                                        <div class="sep">
                                                            <i class="stm-testimonials-new-2">
                                                            </i>
                                                        </div>
                                                        <div class="testimonial_info">
                                                            <h6>
                                                                Steve McDonald
                                                            </h6>
                                                            <div class="position">
                                                                Manager, Tesla Motors Ltd.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item width" id="width">
                                                    <div class="item"
                                                         data-image="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/testimonial_bg_image_2.jpg">
                                                        <p>
                                                            I’ve been happy with the services provided by TransCargo
                                                            LLC. Samantha Culligan has been wonderful! She has returned
                                                            my calls quickly, and she answered all my questions!
                                                        </p>
                                                        <div class="sep">
                                                            <i class="stm-testimonials-new-2">
                                                            </i>
                                                        </div>
                                                        <div class="testimonial_info">
                                                            <h6>
                                                                Anna Briggs
                                                            </h6>
                                                            <div class="position">
                                                                CEO, Smart Move Ltd.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item width" id="width">
                                                    <div class="item"
                                                         data-image="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/testimonial_bg_image_3.jpg">
                                                        <p>
                                                            This is due to their excellent service, competitive pricing
                                                            and customer support. That’s becoming so distant and
                                                            digital, it’s throughly refreshing to get such a personal
                                                            touch.
                                                        </p>
                                                        <div class="sep">
                                                            <i class="stm-testimonials-new-2">
                                                            </i>
                                                        </div>
                                                        <div class="testimonial_info">
                                                            <h6>
                                                                Jonathan Adams
                                                            </h6>
                                                            <div class="position">
                                                                Founder, Great Wall Ltd.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item cloned active width" id="width">
                                                    <div class="item"
                                                         data-image="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/testimonial_bg_image.jpg">
                                                        <p>
                                                            We were previously using an unreliable company with a very
                                                            complicated registration and transfer process. Then we found
                                                            TransCargo and the control came back to us.
                                                        </p>
                                                        <div class="sep">
                                                            <i class="stm-testimonials-new-2">
                                                            </i>
                                                        </div>
                                                        <div class="testimonial_info">
                                                            <h6>
                                                                Steve McDonald
                                                            </h6>
                                                            <div class="position">
                                                                Manager, Tesla Motors Ltd.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item cloned width" id="width">
                                                    <div class="item"
                                                         data-image="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/testimonial_bg_image_2.jpg">
                                                        <p>
                                                            I’ve been happy with the services provided by TransCargo
                                                            LLC. Samantha Culligan has been wonderful! She has returned
                                                            my calls quickly, and she answered all my questions!
                                                        </p>
                                                        <div class="sep">
                                                            <i class="stm-testimonials-new-2">
                                                            </i>
                                                        </div>
                                                        <div class="testimonial_info">
                                                            <h6>
                                                                Anna Briggs
                                                            </h6>
                                                            <div class="position">
                                                                CEO, Smart Move Ltd.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-controls">
                                            <div class="owl-nav">
                                                <div class="owl-prev style-aVovm" id="style-aVovm">
                                                    prev
                                                </div>
                                                <div class="owl-next style-D9Z1S" id="style-D9Z1S">
                                                    next
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-dots" id="owl-nav-6500339e8e5a3">
                                        <div class="owl-dot active">
                                        </div>
                                        <div class="owl-dot">
                                        </div>
                                        <div class="owl-dot">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="  row row   row-fluid   custom_1450356867512">
            <div class="column   column_container   col-sm-12">
                <div class="  column-inner">
                    <div class="wrapper">
                        <div class="  image_carousel_wr grayscale">
                            <div class="  image_carousel owl-carousel owl-theme owl-loaded"
                                 id="owl-64fed5130450e">


                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                         style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1190px;">
                                        <div class="owl-item active"
                                             style="width: 198.333px; margin-right: 0px;">
                                            <div class="item">
                                                <img width="268" height="148" src="./tmarketing-1.jpg"
                                                     class="attachment-full" alt="" decoding="async"
                                                     loading="lazy"></div>
                                        </div>
                                        <div class="owl-item active"
                                             style="width: 198.333px; margin-right: 0px;">
                                            <div class="item">
                                                <img width="268" height="148" src="./primo-1.jpg"
                                                     class="attachment-full" alt="" decoding="async"
                                                     loading="lazy"></div>
                                        </div>
                                        <div class="owl-item active"
                                             style="width: 198.333px; margin-right: 0px;">
                                            <div class="item">
                                                <img width="268" height="148" src="./kphone-1.jpg"
                                                     class="attachment-full" alt="" decoding="async"
                                                     loading="lazy"></div>
                                        </div>
                                        <div class="owl-item active"
                                             style="width: 198.333px; margin-right: 0px;">
                                            <div class="item">
                                                <img width="268" height="148" src="./edge-1.jpg"
                                                     class="attachment-full" alt="" decoding="async"
                                                     loading="lazy"></div>
                                        </div>
                                        <div class="owl-item active"
                                             style="width: 198.333px; margin-right: 0px;">
                                            <div class="item">
                                                <img width="268" height="148" src="./arcade-1.jpg"
                                                     class="attachment-full" alt="" decoding="async"
                                                     loading="lazy"></div>
                                        </div>
                                        <div class="owl-item active"
                                             style="width: 198.333px; margin-right: 0px;">
                                            <div class="item">
                                                <img width="268" height="148" src="./aramiz-1.jpg"
                                                     class="attachment-full" alt="" decoding="async"
                                                     loading="lazy"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-controls">
                                    <div class="owl-nav">
                                        <div class="owl-prev" style="display: none;">prev</div>
                                        <div class="owl-next" style="display: none;">next</div>
                                    </div>
                                    <div style="display: none;" class="owl-dots"></div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                jQuery(document).ready(function ($) {
                                    $("#owl-64fed5130450e").owlCarousel({
                                        autoplay: true,
                                        dots: false,
                                        autoplayTimeout: 5000,
                                        smartSpeed: 250,
                                        responsive: {
                                            0: {
                                                items: 2
                                            },
                                            768: {
                                                items: 4
                                            },
                                            980: {
                                                items: 5
                                            },
                                            1199: {
                                                items: 6
                                            }
                                        }
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-full-width="true" data-full-width-init="true"
             class="  row row   row-fluid reset-sm-paddings   custom_1451973500888   row-has-fill"
             style="position: relative; box-sizing: border-box; padding-left: 390px; padding-right: 390px; display: flex;">
            <div class="column   column_container   col-sm-12   col-lg-5   col-md-6">
                <div class="  column-inner   custom_1450444940366">
                    <div class="wrapper"><h2 style="text-align: left" class="  custom_heading">What
                            makes us special?</h2>
                        <div class="text_column content_element ">
                            <div class="wrapper">
                                <p>Over 42,000 dedicated employees, working in 17 regional clusters around
                                    the globe, deliver operational excellence.</p>

                            </div>
                        </div>
                        <div class="  row row   inner   row-fluid reset-sm-paddings   custom_1449127190171">
                            <div class="column   column_container   col-sm-6   col-xs-12">
                                <div class="  column-inner   custom_1450423994691">
                                    <div class="wrapper">
                                        <div class="stm_icon left icon_position_left">
                                            <div class="icon" style="font-size: 71px; width: 95px;">
                                                <i class="stm-packaging-and-storage"></i>
                                            </div>
                                            <div class="icon_text">
                                                <div class="title"
                                                     style="font-size: 14px; font-weight: 600;">
                                                    Packaging<br>
                                                    and Storage
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column   column_container   col-sm-6   col-xs-12">
                                <div class="  column-inner   custom_1450423999162">
                                    <div class="wrapper">
                                        <div class="stm_icon left icon_position_left">
                                            <div class="icon" style="font-size: 64px; width: 95px;">
                                                <i class="stm-warehousing-service"></i>
                                            </div>
                                            <div class="icon_text">
                                                <div class="title"
                                                     style="font-size: 14px; font-weight: 600;">
                                                    Warehousing<br>
                                                    service
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="  row row   inner   row-fluid reset-sm-paddings   custom_1449127193884">
                            <div class="column   column_container   col-sm-6   col-xs-12">
                                <div class="  column-inner   custom_1450424067703">
                                    <div class="wrapper">
                                        <div class="stm_icon left icon_position_left">
                                            <div class="icon" style="font-size: 51px; width: 95px;">
                                                <i class="stm-ground-transport"></i>
                                            </div>
                                            <div class="icon_text">
                                                <div class="title"
                                                     style="font-size: 14px; font-weight: 600;">
                                                    Ground<br>
                                                    Transport
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column   column_container   col-sm-6   col-xs-12">
                                <div class="  column-inner   custom_1450424075450">
                                    <div class="wrapper">
                                        <div class="stm_icon left icon_position_left">
                                            <div class="icon" style="font-size: 50px; width: 95px;">
                                                <i class="stm-logistic-services"></i>
                                            </div>
                                            <div class="icon_text">
                                                <div class="title"
                                                     style="font-size: 14px; font-weight: 600;">
                                                    Logistic<br>
                                                    Services
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column   column_container   col-sm-12   col-lg-7   col-md-6">
                <div class="  column-inner   custom_1451973486237">
                    <div class="wrapper">
                        <div class="  row row   inner   row-fluid reset-sm-paddings">
                            <div class="base_bg_color column   column_container   col-sm-12">
                                <div class="  column-inner   custom_1450423858601">
                                    <div class="wrapper"><h2 style="color: #ffffff;text-align: left"
                                                             class="  custom_heading">Request a Free
                                            Quote</h2>
                                        <div class="wpcf7 js" id="wpcf7-f1322-p2-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"><p role="status"
                                                                                   aria-live="polite"
                                                                                   aria-atomic="true"></p>
                                                <ul></ul>
                                            </div>
                                            <form action="/#wpcf7-f1322-p2-o1" method="post"
                                                  class="wpcf7-form init" aria-label="Contact form"
                                                  novalidate="novalidate" data-status="init">
                                                <div style="display: none;">
                                                    <input type="hidden" name="_wpcf7" value="1322">
                                                    <input type="hidden" name="_wpcf7_version"
                                                           value="5.7.2">
                                                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                                                    <input type="hidden" name="_wpcf7_unit_tag"
                                                           value="wpcf7-f1322-p2-o1">
                                                    <input type="hidden" name="_wpcf7_container_post"
                                                           value="2">
                                                    <input type="hidden" name="_wpcf7_posted_data_hash"
                                                           value="">
                                                </div>
                                                <div class="request_quote">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="input-group">
                                                                <p><span class="wpcf7-form-control-wrap"
                                                                         data-name="freight_type"><select
                                                                                class="wpcf7-form-control wpcf7-select select2-hidden-accessible"
                                                                                aria-invalid="false"
                                                                                name="freight_type" tabindex="-1"
                                                                                aria-hidden="true"><option value=""
                                                                                                           selected="selected">Freight Type</option><option
                                                                                    value="Road Transportation">Road Transportation</option><option
                                                                                    value="Air Transportation">Air Transportation</option><option
                                                                                    value="Sea Transportation">Sea Transportation</option><option
                                                                                    value="Warehousing">Warehousing</option></select><span
                                                                                class="select2 select2-container select2-container--default"
                                                                                dir="ltr" style="width: 100%;"><span
                                                                                    class="selection"><span
                                                                                        class="select2-selection select2-selection--single"
                                                                                        role="combobox"
                                                                                        aria-autocomplete="list"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"
                                                                                        tabindex="0"
                                                                                        aria-labelledby="select2-freight_type-x1-container"><span
                                                                                            class="select2-selection__rendered"
                                                                                            id="select2-freight_type-x1-container"
                                                                                            title="Freight Type">Freight Type</span><span
                                                                                            class="select2-selection__arrow"
                                                                                            role="presentation"><b
                                                                                                role="presentation"></b></span></span></span><span
                                                                                    class="dropdown-wrapper"
                                                                                    aria-hidden="true"></span></span></span>
                                                                </p>
                                                            </div>
                                                            <div class="input-group">
                                                                <p><span class="wpcf7-form-control-wrap"
                                                                         data-name="departure_city"><input
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                aria-required="true"
                                                                                aria-invalid="false"
                                                                                placeholder="City of departure"
                                                                                type="text"
                                                                                name="departure_city"></span>
                                                                </p>
                                                            </div>
                                                            <div class="input-group">
                                                                <p><span class="wpcf7-form-control-wrap"
                                                                         data-name="delivery_city"><input
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text"
                                                                                aria-invalid="false"
                                                                                placeholder="Delivery city"
                                                                                type="text"
                                                                                name="delivery_city"></span>
                                                                </p>
                                                            </div>
                                                            <div class="input-group">
                                                                <p><span class="wpcf7-form-control-wrap"
                                                                         data-name="incoterms"><select
                                                                                class="wpcf7-form-control wpcf7-select select2-hidden-accessible"
                                                                                aria-invalid="false"
                                                                                name="incoterms" tabindex="-1"
                                                                                aria-hidden="true"><option value=""
                                                                                                           selected="selected">Incoterms</option><option
                                                                                    value="EXW">EXW</option><option
                                                                                    value="FCA">FCA</option><option
                                                                                    value="CPT">CPT</option><option
                                                                                    value="CIP">CIP</option><option
                                                                                    value="DAT">DAT</option><option
                                                                                    value="DAP">DAP</option><option
                                                                                    value="DDP">DDP</option><option
                                                                                    value="FAS">FAS</option><option
                                                                                    value="FOB">FOB</option><option
                                                                                    value="CFR">CFR</option><option
                                                                                    value="CIF">CIF</option></select><span
                                                                                class="select2 select2-container select2-container--default"
                                                                                dir="ltr" style="width: 100%;"><span
                                                                                    class="selection"><span
                                                                                        class="select2-selection select2-selection--single"
                                                                                        role="combobox"
                                                                                        aria-autocomplete="list"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"
                                                                                        tabindex="0"
                                                                                        aria-labelledby="select2-incoterms-d3-container"><span
                                                                                            class="select2-selection__rendered"
                                                                                            id="select2-incoterms-d3-container"
                                                                                            title="Incoterms">Incoterms</span><span
                                                                                            class="select2-selection__arrow"
                                                                                            role="presentation"><b
                                                                                                role="presentation"></b></span></span></span><span
                                                                                    class="dropdown-wrapper"
                                                                                    aria-hidden="true"></span></span></span>
                                                                </p>
                                                            </div>
                                                            <div class="input-group">
                                                                <p><span class="wpcf7-form-control-wrap"
                                                                         data-name="total_weight"><input
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text"
                                                                                aria-invalid="false"
                                                                                placeholder="Total gross weight (KG)"
                                                                                type="text"
                                                                                name="total_weight"></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="input-group">
                                                                <p><span class="wpcf7-form-control-wrap"
                                                                         data-name="dimension"><input
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text"
                                                                                aria-invalid="false"
                                                                                placeholder="Dimension" type="text"
                                                                                name="dimension"></span>
                                                                </p>
                                                            </div>
                                                            <div class="input-group">
                                                                <p><span class="wpcf7-form-control-wrap"
                                                                         data-name="email"><input size="40"
                                                                                                  class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                                  aria-required="true"
                                                                                                  aria-invalid="false"
                                                                                                  placeholder="Email"
                                                                                                  type="email"
                                                                                                  name="email"></span>
                                                                </p>
                                                            </div>
                                                            <div class="input-group">
                                                                <p><span class="wpcf7-form-control-wrap"
                                                                         data-name="message"><textarea
                                                                                cols="40" rows="10"
                                                                                class="wpcf7-form-control wpcf7-textarea"
                                                                                aria-invalid="false"
                                                                                placeholder="Message"
                                                                                name="message"></textarea></span>
                                                                </p>
                                                            </div>
                                                            <div class="input-group">
                                                                <p>
                                                                    <button class="button size-sm fullwidth theme-wpcf7-submit">
                                                                        Submit <i
                                                                                class="stm-arrow-next"></i>
                                                                    </button>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p style="display: none !important;"><label>Δ<textarea
                                                                name="_wpcf7_ak_hp_textarea" cols="45" rows="8"
                                                                maxlength="100"></textarea></label><input
                                                            type="hidden" id="ak_js_1" name="_wpcf7_ak_js"
                                                            value="1694422294246">
                                                    <script>document.getElementById("ak_js_1").setAttribute("value", (new Date()).getTime());</script>
                                                </p>
                                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7450.9429371919005!2d105.75678!3d20.97373!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1694508342108!5m2!1svi!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>

@endsection
