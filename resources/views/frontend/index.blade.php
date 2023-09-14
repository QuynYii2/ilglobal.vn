@extends('frontend.layouts.master')
@section('title', 'Home page')
@section('main-content')
    <div id="content">
        <article id="post-2" class="post-2 page type-page status-publish hentry">
            <div class="container">
{{--                <div class="row-fluid">--}}
{{--                    <div class="column column_container col-sm-12">--}}
{{--                        <div class="column-inner">--}}
{{--                            <div class="wrapper">--}}
{{--                                <rs-fullwidth-wrap id="rev_slider_1_1_forcefullwidth" class="style-HpEzl">--}}
{{--                                    <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery"--}}
{{--                                                    class="style-ziTZ5">--}}
{{--                                        <rs-module id="rev_slider_1_1" data-version="6.5.5" data-idcheck="true"--}}
{{--                                                   class="revslider-initialised rev_redraw_on_blurfocus style-j91o1"--}}
{{--                                                   data-slideactive="rs-14">--}}
{{--                                            <rs-loader class="spinner2  style-9Kn2g" id="style-9Kn2g">--}}
{{--                                                <div class="dot1">--}}
{{--                                                </div>--}}
{{--                                                <div class="dot2">--}}
{{--                                                </div>--}}
{{--                                                <div class="bounce1">--}}
{{--                                                </div>--}}
{{--                                                <div class="bounce2">--}}
{{--                                                </div>--}}
{{--                                                <div class="bounce3">--}}
{{--                                                </div>--}}
{{--                                            </rs-loader>--}}
{{--                                            <rs-progress id="style-sQbXU" class="style-sQbXU">--}}
{{--                                                <rs-progress-bar id="style-SBe7n" class="style-SBe7n">--}}
{{--                                                </rs-progress-bar>--}}
{{--                                            </rs-progress>--}}
{{--                                            <rs-slides id="style-759h9" class="style-759h9">--}}
{{--                                                <rs-slide data-key="rs-14" data-title="Slide" data-in="prst:rndany;o:0;"--}}
{{--                                                          data-out="a:false;" data-originalindex="1" data-origindex="0"--}}
{{--                                                          data-description="" data-sba="" data-scroll-based="false"--}}
{{--                                                          data-owidth="1920" data-oheight="900"--}}
{{--                                                          data-rspausetimeronce="0" data-isactiveslide="true"--}}
{{--                                                          id="style-2ph2s" class="style-2ph2s">--}}
{{--                                                    <rs-sbg-px>--}}
{{--                                                        <rs-sbg-wrap data-key="rs-14" data-owidth="1920"--}}
{{--                                                                     data-oheight="900">--}}
{{--                                                            <rs-sbg data-lazyload="//logistics.stylemixthemes.com/wp-content/uploads/2015/12/slider_1.jpg"--}}
{{--                                                                    class="style-BJ7Ux" data-bgcolor="transparent"--}}
{{--                                                                    data-src-rs-ref="//logistics.stylemixthemes.com/wp-content/uploads/2015/12/slider_1.jpg"--}}
{{--                                                                    id="style-BJ7Ux">--}}
{{--                                                                <canvas width="1903" height="900" id="style-JcgoL"--}}
{{--                                                                        class="style-JcgoL">--}}
{{--                                                                </canvas>--}}
{{--                                                                <img data-reference="//logistics.stylemixthemes.com/wp-content/uploads/2015/12/slider_1.jpg"--}}
{{--                                                                     src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/12/slider_1.jpg"--}}
{{--                                                                     width="1919" height="900" id="style-G1X2O"--}}
{{--                                                                     class="style-G1X2O">--}}
{{--                                                            </rs-sbg>--}}
{{--                                                        </rs-sbg-wrap>--}}
{{--                                                    </rs-sbg-px>--}}
{{--                                                    <rs-layer-wrap class="rs-parallax-wrap style-JRDD2"--}}
{{--                                                                   id="style-JRDD2">--}}
{{--                                                        <rs-loop-wrap id="style-9FZU1" class="style-9FZU1">--}}
{{--                                                            <rs-mask-wrap id="style-AUZrZ" class="style-AUZrZ">--}}
{{--                                                                <rs-layer id="slider-1-slide-14-layer-9"--}}
{{--                                                                          class="slider_text_bg tp-shape tp-shapewrapper rs-layer style-LXEm4"--}}
{{--                                                                          data-type="shape" data-rsp_ch="on"--}}
{{--                                                                          data-xy="x:15px;y:240px;"--}}
{{--                                                                          data-dim="w:540px;h:380px;"--}}
{{--                                                                          data-frame_0="tp:600;"--}}
{{--                                                                          data-frame_1="tp:600;e:power2.inOut;st:1450;"--}}
{{--                                                                          data-frame_999="o:0;tp:600;e:nothing;st:w;"--}}
{{--                                                                          data-idcheck="true" data-stylerecorder="true"--}}
{{--                                                                          data-initialised="true">--}}
{{--                                                                </rs-layer>--}}
{{--                                                            </rs-mask-wrap>--}}
{{--                                                        </rs-loop-wrap>--}}
{{--                                                    </rs-layer-wrap>--}}
{{--                                                    <rs-layer-wrap class="rs-parallax-wrap style-TBQL4"--}}
{{--                                                                   id="style-TBQL4">--}}
{{--                                                        <rs-loop-wrap id="style-XPUam" class="style-XPUam">--}}
{{--                                                            <rs-mask-wrap id="style-nGMPo" class="style-nGMPo">--}}
{{--                                                                <rs-layer id="slider-1-slide-14-layer-5"--}}
{{--                                                                          class="slider_line tp-shape tp-shapewrapper rs-layer style-IgKYa"--}}
{{--                                                                          data-type="shape" data-rsp_ch="on"--}}
{{--                                                                          data-xy="x:80px;y:306px;" data-text="fw:900;"--}}
{{--                                                                          data-dim="w:50px;h:3px;"--}}
{{--                                                                          data-frame_0="x:-100%;o:1;tp:600;"--}}
{{--                                                                          data-frame_0_mask="u:t;"--}}
{{--                                                                          data-frame_1="tp:600;e:Strong.easeOut;st:1450;"--}}
{{--                                                                          data-frame_1_mask="u:t;"--}}
{{--                                                                          data-frame_999="x:-100%;tp:600;st:w;"--}}
{{--                                                                          data-frame_999_mask="u:t;" data-idcheck="true"--}}
{{--                                                                          data-stylerecorder="true"--}}
{{--                                                                          data-initialised="true">--}}
{{--                                                                </rs-layer>--}}
{{--                                                            </rs-mask-wrap>--}}
{{--                                                        </rs-loop-wrap>--}}
{{--                                                    </rs-layer-wrap>--}}
{{--                                                    <rs-layer-wrap class="rs-parallax-wrap style-mzcj8"--}}
{{--                                                                   id="style-mzcj8">--}}
{{--                                                        <rs-loop-wrap id="style-yat7M" class="style-yat7M">--}}
{{--                                                            <rs-mask-wrap id="style-zBNGr" class="style-zBNGr">--}}
{{--                                                                <rs-layer id="slider-1-slide-14-layer-2"--}}
{{--                                                                          class="STM-Title rs-layer style-RRkx8"--}}
{{--                                                                          data-type="text"--}}
{{--                                                                          data-color="rgba(255,255,255,1)"--}}
{{--                                                                          data-rsp_ch="on" data-xy="x:80px;y:337px;"--}}
{{--                                                                          data-text="s:48;l:54;"--}}
{{--                                                                          data-frame_0="y:50px;tp:600;"--}}
{{--                                                                          data-frame_1="tp:600;e:Strong.easeOut;st:700;sp:1000;"--}}
{{--                                                                          data-frame_999="y:50px;o:0;tp:600;e:nothing;st:w;sp:400;"--}}
{{--                                                                          data-idcheck="true" data-stylerecorder="true"--}}
{{--                                                                          data-initialised="true">--}}
{{--                                                                    <span data-stylerecorder="true" id="style-m2EsY"--}}
{{--                                                                          class="style-m2EsY">--}}
{{--                                                                        CONTINENTAL--}}
{{--                                                                        <br>--}}
{{--                                                                        TRANSPORTATION--}}
{{--                                                                    </span>--}}
{{--                                                                </rs-layer>--}}
{{--                                                            </rs-mask-wrap>--}}
{{--                                                        </rs-loop-wrap>--}}
{{--                                                    </rs-layer-wrap>--}}
{{--                                                    <rs-layer-wrap class="rs-parallax-wrap style-cSmed"--}}
{{--                                                                   id="style-cSmed">--}}
{{--                                                        <rs-loop-wrap id="style-YxFbe" class="style-YxFbe">--}}
{{--                                                            <rs-mask-wrap id="style-P1njg" class="style-P1njg">--}}
{{--                                                                <p id="slider-1-slide-14-layer-6"--}}
{{--                                                                   class="rs-layer STM-Text style-shp5U"--}}
{{--                                                                   data-type="text" data-color="rgba(255,255,255,1)"--}}
{{--                                                                   data-rsp_ch="on" data-xy="x:80px;y:472px;"--}}
{{--                                                                   data-text="s:16;l:28;" data-frame_0="y:50px;tp:600;"--}}
{{--                                                                   data-frame_1="tp:600;e:Strong.easeOut;st:900;sp:1000;"--}}
{{--                                                                   data-frame_999="y:50px;o:0;tp:600;e:nothing;st:w;sp:400;"--}}
{{--                                                                   data-idcheck="true" data-stylerecorder="true"--}}
{{--                                                                   data-initialised="true">--}}
{{--                                                                    To best support your ever-changing logistics--}}
{{--                                                                    <br>--}}
{{--                                                                    needs, we are continuously evolving our--}}
{{--                                                                    <br>--}}
{{--                                                                    transportation services.--}}
{{--                                                                </p>--}}
{{--                                                            </rs-mask-wrap>--}}
{{--                                                        </rs-loop-wrap>--}}
{{--                                                    </rs-layer-wrap>--}}
{{--                                                </rs-slide>--}}
{{--                                                <rs-slide data-key="rs-35" data-title="Slide"--}}
{{--                                                          data-anim="d:20;p:dark;f:slidebased;"--}}
{{--                                                          data-in="prst:rndany;o:0;x:(15%);sx:0.8;sy:0.8;e:power2.out;row:5;col:5;"--}}
{{--                                                          data-out="o:0;x:(-15%);sx:0.8;sy:0.8;e:power2.in;row:5;col:5;"--}}
{{--                                                          class="overlay style-GPXN7" data-originalindex="2"--}}
{{--                                                          data-origindex="1" data-description="" data-sba=""--}}
{{--                                                          data-scroll-based="false" data-owidth="1920"--}}
{{--                                                          data-oheight="900" id="style-GPXN7">--}}
{{--                                                    <rs-sbg-px>--}}
{{--                                                        <rs-sbg-wrap data-key="rs-35" data-owidth="1920"--}}
{{--                                                                     data-oheight="900">--}}
{{--                                                            <rs-sbg data-lazyload="//logistics.stylemixthemes.com/wp-content/uploads/2015/11/slider_1.jpg"--}}
{{--                                                                    class="style-KFRdI" data-bgcolor="transparent"--}}
{{--                                                                    data-src-rs-ref="//logistics.stylemixthemes.com/wp-content/uploads/2015/11/slider_1.jpg"--}}
{{--                                                                    id="style-KFRdI">--}}
{{--                                                                <canvas id="style-FYkKl" class="style-FYkKl">--}}
{{--                                                                </canvas>--}}
{{--                                                            </rs-sbg>--}}
{{--                                                        </rs-sbg-wrap>--}}
{{--                                                    </rs-sbg-px>--}}
{{--                                                    <rs-layer-wrap class="rs-parallax-wrap  style-EDA6x"--}}
{{--                                                                   id="style-EDA6x">--}}
{{--                                                        <rs-loop-wrap id="style-TFMgX" class="style-TFMgX">--}}
{{--                                                            <rs-mask-wrap id="style-74zle" class="style-74zle">--}}
{{--                                                                <rs-layer id="slider-1-slide-35-layer-9"--}}
{{--                                                                          class="slider_text_bg tp-shape tp-shapewrapper rs-layer style-73h3S"--}}
{{--                                                                          data-type="shape" data-rsp_ch="on"--}}
{{--                                                                          data-xy="x:15px;y:240px;"--}}
{{--                                                                          data-dim="w:540px;h:380px;"--}}
{{--                                                                          data-frame_0="tp:600;"--}}
{{--                                                                          data-frame_1="tp:600;e:power2.inOut;st:1450;"--}}
{{--                                                                          data-frame_999="o:0;tp:600;e:nothing;st:w;"--}}
{{--                                                                          data-idcheck="true">--}}
{{--                                                                </rs-layer>--}}
{{--                                                            </rs-mask-wrap>--}}
{{--                                                        </rs-loop-wrap>--}}
{{--                                                    </rs-layer-wrap>--}}
{{--                                                    <rs-layer-wrap class="rs-parallax-wrap  style-RUjiY"--}}
{{--                                                                   id="style-RUjiY">--}}
{{--                                                        <rs-loop-wrap id="style-wxntG" class="style-wxntG">--}}
{{--                                                            <rs-mask-wrap id="style-mE9b9" class="style-mE9b9">--}}
{{--                                                                <rs-layer id="slider-1-slide-35-layer-5"--}}
{{--                                                                          class="slider_line tp-shape tp-shapewrapper rs-layer style-E2yGk"--}}
{{--                                                                          data-type="shape" data-rsp_ch="on"--}}
{{--                                                                          data-xy="x:80px;y:306px;" data-text="fw:900;"--}}
{{--                                                                          data-dim="w:50px;h:3px;"--}}
{{--                                                                          data-frame_0="x:-100%;o:1;tp:600;"--}}
{{--                                                                          data-frame_0_mask="u:t;"--}}
{{--                                                                          data-frame_1="tp:600;e:Strong.easeOut;st:1450;"--}}
{{--                                                                          data-frame_1_mask="u:t;"--}}
{{--                                                                          data-frame_999="x:-100%;tp:600;st:w;"--}}
{{--                                                                          data-frame_999_mask="u:t;"--}}
{{--                                                                          data-idcheck="true">--}}
{{--                                                                </rs-layer>--}}
{{--                                                            </rs-mask-wrap>--}}
{{--                                                        </rs-loop-wrap>--}}
{{--                                                    </rs-layer-wrap>--}}
{{--                                                    <rs-layer-wrap class="rs-parallax-wrap  style-gCAcK"--}}
{{--                                                                   id="style-gCAcK">--}}
{{--                                                        <rs-loop-wrap id="style-oTN4p" class="style-oTN4p">--}}
{{--                                                            <rs-mask-wrap id="style-cRpK2" class="style-cRpK2">--}}
{{--                                                                <rs-layer id="slider-1-slide-35-layer-2"--}}
{{--                                                                          class="STM-Title rs-layer style-MsHnM"--}}
{{--                                                                          data-type="text"--}}
{{--                                                                          data-color="rgba(255,255,255,1)"--}}
{{--                                                                          data-rsp_ch="on" data-xy="x:80px;y:337px;"--}}
{{--                                                                          data-text="s:48;l:54;"--}}
{{--                                                                          data-frame_0="y:50px;tp:600;"--}}
{{--                                                                          data-frame_1="tp:600;e:Strong.easeOut;st:700;sp:1000;"--}}
{{--                                                                          data-frame_999="y:50px;o:0;tp:600;e:nothing;st:w;sp:400;"--}}
{{--                                                                          data-idcheck="true">--}}
{{--                                                                    <span id="style-iH1oo" class="style-iH1oo">--}}
{{--                                                                        TRANSATLANTIC--}}
{{--                                                                        <br>--}}
{{--                                                                        DELIVERY--}}
{{--                                                                    </span>--}}
{{--                                                                </rs-layer>--}}
{{--                                                            </rs-mask-wrap>--}}
{{--                                                        </rs-loop-wrap>--}}
{{--                                                    </rs-layer-wrap>--}}
{{--                                                    <rs-layer-wrap class="rs-parallax-wrap  style-Pvhbr"--}}
{{--                                                                   id="style-Pvhbr">--}}
{{--                                                        <rs-loop-wrap id="style-kwvpQ" class="style-kwvpQ">--}}
{{--                                                            <rs-mask-wrap id="style-16O7V" class="style-16O7V">--}}
{{--                                                                <p id="slider-1-slide-35-layer-6"--}}
{{--                                                                   class="rs-layer STM-Text style-bBpHN"--}}
{{--                                                                   data-type="text" data-color="rgba(255,255,255,1)"--}}
{{--                                                                   data-rsp_ch="on" data-xy="x:80px;y:472px;"--}}
{{--                                                                   data-text="s:16;l:28;" data-frame_0="y:50px;tp:600;"--}}
{{--                                                                   data-frame_1="tp:600;e:Strong.easeOut;st:900;sp:1000;"--}}
{{--                                                                   data-frame_999="y:50px;o:0;tp:600;e:nothing;st:w;sp:400;"--}}
{{--                                                                   data-idcheck="true">--}}
{{--                                                                    Combined rail road transport is particularly--}}
{{--                                                                    <br>--}}
{{--                                                                    well suited to the shipping of hazardous goods--}}
{{--                                                                    <br>--}}
{{--                                                                    since it reduces risk.--}}
{{--                                                                </p>--}}
{{--                                                            </rs-mask-wrap>--}}
{{--                                                        </rs-loop-wrap>--}}
{{--                                                    </rs-layer-wrap>--}}
{{--                                                </rs-slide>--}}
{{--                                                <rs-slide data-key="rs-34" data-title="Slide"--}}
{{--                                                          data-anim="d:20;f:slidebased;"--}}
{{--                                                          data-in="prst:rndany;o:-0.5;x:(15%);sx:0.8;sy:0.8;row:5;col:5;"--}}
{{--                                                          class="overlay style-tXHBW" data-originalindex="3"--}}
{{--                                                          data-origindex="2" data-description="" data-sba=""--}}
{{--                                                          data-scroll-based="false" id="style-tXHBW">--}}
{{--                                                    <rs-sbg-px>--}}
{{--                                                        <rs-sbg-wrap data-key="rs-34">--}}
{{--                                                            <rs-sbg data-lazyload="//logistics.stylemixthemes.com/wp-content/uploads/2015/12/slider_3.jpg"--}}
{{--                                                                    class="style-SvohL" data-bgcolor="transparent"--}}
{{--                                                                    id="style-SvohL">--}}
{{--                                                                <canvas id="style-XibU9" class="style-XibU9">--}}
{{--                                                                </canvas>--}}
{{--                                                            </rs-sbg>--}}
{{--                                                        </rs-sbg-wrap>--}}
{{--                                                    </rs-sbg-px>--}}
{{--                                                    <rs-layer-wrap class="rs-parallax-wrap  style-75rkf"--}}
{{--                                                                   id="style-75rkf">--}}
{{--                                                        <rs-loop-wrap id="style-bdJXJ" class="style-bdJXJ">--}}
{{--                                                            <rs-mask-wrap id="style-GtQ96" class="style-GtQ96">--}}
{{--                                                                <rs-layer id="slider-1-slide-34-layer-9"--}}
{{--                                                                          class="slider_text_bg tp-shape tp-shapewrapper rs-layer style-JoZEP"--}}
{{--                                                                          data-type="shape" data-rsp_ch="on"--}}
{{--                                                                          data-xy="x:15px;y:240px;"--}}
{{--                                                                          data-dim="w:540px;h:380px;"--}}
{{--                                                                          data-frame_0="tp:600;"--}}
{{--                                                                          data-frame_1="tp:600;e:power2.inOut;st:1450;"--}}
{{--                                                                          data-frame_999="o:0;tp:600;e:nothing;st:w;"--}}
{{--                                                                          data-idcheck="true">--}}
{{--                                                                </rs-layer>--}}
{{--                                                            </rs-mask-wrap>--}}
{{--                                                        </rs-loop-wrap>--}}
{{--                                                    </rs-layer-wrap>--}}
{{--                                                    <rs-layer-wrap class="rs-parallax-wrap  style-CsTyg"--}}
{{--                                                                   id="style-CsTyg">--}}
{{--                                                        <rs-loop-wrap id="style-osmCS" class="style-osmCS">--}}
{{--                                                            <rs-mask-wrap id="style-3FOXn" class="style-3FOXn">--}}
{{--                                                                <rs-layer id="slider-1-slide-34-layer-5"--}}
{{--                                                                          class="slider_line tp-shape tp-shapewrapper rs-layer style-AiPRa"--}}
{{--                                                                          data-type="shape" data-rsp_ch="on"--}}
{{--                                                                          data-xy="x:80px;y:306px;" data-text="fw:900;"--}}
{{--                                                                          data-dim="w:50px;h:3px;"--}}
{{--                                                                          data-frame_0="x:-100%;o:1;tp:600;"--}}
{{--                                                                          data-frame_0_mask="u:t;"--}}
{{--                                                                          data-frame_1="tp:600;e:Strong.easeOut;st:1450;"--}}
{{--                                                                          data-frame_1_mask="u:t;"--}}
{{--                                                                          data-frame_999="x:-100%;tp:600;st:w;"--}}
{{--                                                                          data-frame_999_mask="u:t;"--}}
{{--                                                                          data-idcheck="true">--}}
{{--                                                                </rs-layer>--}}
{{--                                                            </rs-mask-wrap>--}}
{{--                                                        </rs-loop-wrap>--}}
{{--                                                    </rs-layer-wrap>--}}
{{--                                                    <rs-layer-wrap class="rs-parallax-wrap  style-hM3LE"--}}
{{--                                                                   id="style-hM3LE">--}}
{{--                                                        <rs-loop-wrap id="style-nUqEX" class="style-nUqEX">--}}
{{--                                                            <rs-mask-wrap id="style-41iGX" class="style-41iGX">--}}
{{--                                                                <rs-layer id="slider-1-slide-34-layer-2"--}}
{{--                                                                          class="STM-Title rs-layer style-WV93o"--}}
{{--                                                                          data-type="text"--}}
{{--                                                                          data-color="rgba(255,255,255,1)"--}}
{{--                                                                          data-rsp_ch="on" data-xy="x:80px;y:337px;"--}}
{{--                                                                          data-text="s:48;l:54;"--}}
{{--                                                                          data-frame_0="y:50px;tp:600;"--}}
{{--                                                                          data-frame_1="tp:600;e:Strong.easeOut;st:700;sp:1000;"--}}
{{--                                                                          data-frame_999="y:50px;o:0;tp:600;e:nothing;st:w;sp:400;"--}}
{{--                                                                          data-idcheck="true">--}}
{{--                                                                    <span id="style-vfnBU" class="style-vfnBU">--}}
{{--                                                                        SEA &amp; OCEAN--}}
{{--                                                                        <br>--}}
{{--                                                                        DELIVERY--}}
{{--                                                                    </span>--}}
{{--                                                                </rs-layer>--}}
{{--                                                            </rs-mask-wrap>--}}
{{--                                                        </rs-loop-wrap>--}}
{{--                                                    </rs-layer-wrap>--}}
{{--                                                    <rs-layer-wrap class="rs-parallax-wrap  style-pI1wl"--}}
{{--                                                                   id="style-pI1wl">--}}
{{--                                                        <rs-loop-wrap id="style-MDlsp" class="style-MDlsp">--}}
{{--                                                            <rs-mask-wrap id="style-Xff6J" class="style-Xff6J">--}}
{{--                                                                <p id="slider-1-slide-34-layer-6"--}}
{{--                                                                   class="rs-layer STM-Text style-3EJXU"--}}
{{--                                                                   data-type="text" data-color="rgba(255,255,255,1)"--}}
{{--                                                                   data-rsp_ch="on" data-xy="x:80px;y:472px;"--}}
{{--                                                                   data-text="s:16;l:28;" data-frame_0="y:50px;tp:600;"--}}
{{--                                                                   data-frame_1="tp:600;e:Strong.easeOut;st:900;sp:1000;"--}}
{{--                                                                   data-frame_999="y:50px;o:0;tp:600;e:nothing;st:w;sp:400;"--}}
{{--                                                                   data-idcheck="true">--}}
{{--                                                                    Sea-Air cargo is the last to be loaded--}}
{{--                                                                    <br>--}}
{{--                                                                    and the first to be unloaded, reducing--}}
{{--                                                                    <br>--}}
{{--                                                                    transshipment times and risk.--}}
{{--                                                                </p>--}}
{{--                                                            </rs-mask-wrap>--}}
{{--                                                        </rs-loop-wrap>--}}
{{--                                                    </rs-layer-wrap>--}}
{{--                                                </rs-slide>--}}
{{--                                                <rs-slide data-key="rs-33" data-title="Slide" data-anim="p:transparent;"--}}
{{--                                                          data-in="prst:rndany;o:0;" data-out="o:0;"--}}
{{--                                                          class="overlay style-ZxTEj" data-originalindex="4"--}}
{{--                                                          data-origindex="3" data-description="" data-sba=""--}}
{{--                                                          data-scroll-based="false" data-owidth="1920"--}}
{{--                                                          data-oheight="900" id="style-ZxTEj">--}}
{{--                                                    <rs-sbg-px>--}}
{{--                                                        <rs-sbg-wrap data-key="rs-33" data-owidth="1920"--}}
{{--                                                                     data-oheight="900">--}}
{{--                                                            <rs-sbg data-lazyload="//logistics.stylemixthemes.com/wp-content/uploads/2015/12/slider_4.jpg"--}}
{{--                                                                    class="style-wVEoE" data-bgcolor="transparent"--}}
{{--                                                                    data-src-rs-ref="//logistics.stylemixthemes.com/wp-content/uploads/2015/12/slider_4.jpg"--}}
{{--                                                                    id="style-wVEoE">--}}
{{--                                                                <canvas id="style-NtgOj" class="style-NtgOj">--}}
{{--                                                                </canvas>--}}
{{--                                                            </rs-sbg>--}}
{{--                                                        </rs-sbg-wrap>--}}
{{--                                                    </rs-sbg-px>--}}
{{--                                                    <rs-layer-wrap class="rs-parallax-wrap  style-Y2hWg"--}}
{{--                                                                   id="style-Y2hWg">--}}
{{--                                                        <rs-loop-wrap id="style-UNote" class="style-UNote">--}}
{{--                                                            <rs-mask-wrap id="style-SEkYO" class="style-SEkYO">--}}
{{--                                                                <rs-layer id="slider-1-slide-33-layer-9"--}}
{{--                                                                          class="slider_text_bg tp-shape tp-shapewrapper rs-layer style-S8MUP"--}}
{{--                                                                          data-type="shape" data-rsp_ch="on"--}}
{{--                                                                          data-xy="x:15px;y:240px;"--}}
{{--                                                                          data-dim="w:540px;h:380px;"--}}
{{--                                                                          data-frame_0="tp:600;"--}}
{{--                                                                          data-frame_1="tp:600;e:power2.inOut;st:1450;"--}}
{{--                                                                          data-frame_999="o:0;tp:600;e:nothing;st:w;"--}}
{{--                                                                          data-idcheck="true">--}}
{{--                                                                </rs-layer>--}}
{{--                                                            </rs-mask-wrap>--}}
{{--                                                        </rs-loop-wrap>--}}
{{--                                                    </rs-layer-wrap>--}}
{{--                                                    <rs-layer-wrap class="rs-parallax-wrap  style-Lcqj3"--}}
{{--                                                                   id="style-Lcqj3">--}}
{{--                                                        <rs-loop-wrap id="style-oVjaY" class="style-oVjaY">--}}
{{--                                                            <rs-mask-wrap id="style-nmVsw" class="style-nmVsw">--}}
{{--                                                                <rs-layer id="slider-1-slide-33-layer-5"--}}
{{--                                                                          class="slider_line tp-shape tp-shapewrapper rs-layer style-NeYvZ"--}}
{{--                                                                          data-type="shape" data-rsp_ch="on"--}}
{{--                                                                          data-xy="x:80px;y:306px;" data-text="fw:900;"--}}
{{--                                                                          data-dim="w:50px;h:3px;"--}}
{{--                                                                          data-frame_0="x:-100%;o:1;tp:600;"--}}
{{--                                                                          data-frame_0_mask="u:t;"--}}
{{--                                                                          data-frame_1="tp:600;e:Strong.easeOut;st:1450;"--}}
{{--                                                                          data-frame_1_mask="u:t;"--}}
{{--                                                                          data-frame_999="x:-100%;tp:600;st:w;"--}}
{{--                                                                          data-frame_999_mask="u:t;"--}}
{{--                                                                          data-idcheck="true">--}}
{{--                                                                </rs-layer>--}}
{{--                                                            </rs-mask-wrap>--}}
{{--                                                        </rs-loop-wrap>--}}
{{--                                                    </rs-layer-wrap>--}}
{{--                                                    <rs-layer-wrap class="rs-parallax-wrap  style-vjaee"--}}
{{--                                                                   id="style-vjaee">--}}
{{--                                                        <rs-loop-wrap id="style-NOtHz" class="style-NOtHz">--}}
{{--                                                            <rs-mask-wrap id="style-GyeUx" class="style-GyeUx">--}}
{{--                                                                <rs-layer id="slider-1-slide-33-layer-2"--}}
{{--                                                                          class="STM-Title rs-layer style-fTiDy"--}}
{{--                                                                          data-type="text"--}}
{{--                                                                          data-color="rgba(255,255,255,1)"--}}
{{--                                                                          data-rsp_ch="on" data-xy="x:80px;y:337px;"--}}
{{--                                                                          data-text="s:48;l:54;"--}}
{{--                                                                          data-frame_0="y:50px;tp:600;"--}}
{{--                                                                          data-frame_1="tp:600;e:Strong.easeOut;st:700;sp:1000;"--}}
{{--                                                                          data-frame_999="y:50px;o:0;tp:600;e:nothing;st:w;sp:400;"--}}
{{--                                                                          data-idcheck="true">--}}
{{--                                                                    <span id="style-bSIki" class="style-bSIki">--}}
{{--                                                                        WAREHOUSING--}}
{{--                                                                        <br>--}}
{{--                                                                        STORAGE--}}
{{--                                                                    </span>--}}
{{--                                                                </rs-layer>--}}
{{--                                                            </rs-mask-wrap>--}}
{{--                                                        </rs-loop-wrap>--}}
{{--                                                    </rs-layer-wrap>--}}
{{--                                                    <rs-layer-wrap class="rs-parallax-wrap  style-aZWAh"--}}
{{--                                                                   id="style-aZWAh">--}}
{{--                                                        <rs-loop-wrap id="style-YopmD" class="style-YopmD">--}}
{{--                                                            <rs-mask-wrap id="style-odDZk" class="style-odDZk">--}}
{{--                                                                <p id="slider-1-slide-33-layer-6"--}}
{{--                                                                   class="rs-layer STM-Text style-jZL1r"--}}
{{--                                                                   data-type="text" data-color="rgba(255,255,255,1)"--}}
{{--                                                                   data-rsp_ch="on" data-xy="x:80px;y:472px;"--}}
{{--                                                                   data-text="s:16;l:28;" data-frame_0="y:50px;tp:600;"--}}
{{--                                                                   data-frame_1="tp:600;e:Strong.easeOut;st:900;sp:1000;"--}}
{{--                                                                   data-frame_999="y:50px;o:0;tp:600;e:nothing;st:w;sp:400;"--}}
{{--                                                                   data-idcheck="true">--}}
{{--                                                                    You can opt for dedicated platforms from--}}
{{--                                                                    <br>--}}
{{--                                                                    the advantages related to shared surfaces,--}}
{{--                                                                    <br>--}}
{{--                                                                    resources and equipment.--}}
{{--                                                                </p>--}}
{{--                                                            </rs-mask-wrap>--}}
{{--                                                        </rs-loop-wrap>--}}
{{--                                                    </rs-layer-wrap>--}}
{{--                                                </rs-slide>--}}
{{--                                            </rs-slides>--}}
{{--                                        </rs-module>--}}
{{--                                    </rs-module-wrap>--}}
{{--                                    <rs-fw-forcer style="height:900px">--}}
{{--                                    </rs-fw-forcer>--}}
{{--                                </rs-fullwidth-wrap>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div data-full-width="true" data-full-width-init="true"--}}
{{--                     class="row-fluid base_bg_color custom_1448432556856 style-XZQHV" id="style-XZQHV">--}}
{{--                    <div class="column column_container col-sm-3 hidden-xs">--}}
{{--                        <div class="column-inner">--}}
{{--                            <div class="wrapper">--}}
{{--                                <a href="#" onclick="revapi1.revshowslide(1);"--}}
{{--                                   class="rev_slider_nav rev_slider_1 rev_slide_1 active">--}}
{{--                                    <span style="" class="icon">--}}
{{--                                        <i class="stm-transport842">--}}

{{--                                        </i>--}}
{{--                                    </span>--}}
{{--                                    <span class="title">--}}
{{--                                        Road Freight--}}
{{--                                    </span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="column column_container col-sm-3 hidden-xs">--}}
{{--                        <div class="column-inner">--}}
{{--                            <div class="wrapper">--}}
{{--                                <a href="#" onclick="revapi1.revshowslide(2);"--}}
{{--                                   class="rev_slider_nav rev_slider_1 rev_slide_2">--}}
{{--                                    <span style="" class="icon">--}}
{{--                                        <i class="stm-transport839">--}}

{{--                                        </i>--}}
{{--                                    </span>--}}
{{--                                    <span class="title">--}}
{{--                                        Air Freight--}}
{{--                                    </span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="column column_container col-sm-3 hidden-xs">--}}
{{--                        <div class="column-inner">--}}
{{--                            <div class="wrapper">--}}
{{--                                <a href="#" onclick="revapi1.revshowslide(3);"--}}
{{--                                   class="rev_slider_nav rev_slider_1 rev_slide_3">--}}
{{--                                    <span style="" class="icon">--}}
{{--                                        <i class="stm-ship">--}}

{{--                                        </i>--}}
{{--                                    </span>--}}
{{--                                    <span class="title">--}}
{{--                                        Sea Freight--}}
{{--                                    </span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="column column_container col-sm-3 hidden-xs">--}}
{{--                        <div class="column-inner">--}}
{{--                            <div class="wrapper">--}}
{{--                                <a href="#" onclick="revapi1.revshowslide(4);"--}}
{{--                                   class="rev_slider_nav rev_slider_1 rev_slide_4">--}}
{{--                                    <span style="" class="icon">--}}
{{--                                        <i class="stm-warehouse">--}}

{{--                                        </i>--}}
{{--                                    </span>--}}
{{--                                    <span class="title">--}}
{{--                                        Warehousing--}}
{{--                                    </span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <section class="home-showcase">--}}
{{--                    <div class="swiper home-showcaseSlider">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="swiper-image" data-swiper-parallax-x="3%" style="background-image:url(https://source.unsplash.com/random?sig=42)">--}}
{{--                                    <div class="text-container">--}}
{{--                                        <h1 class="bigTitle">Lorem ipsum dolor<span class="orangeIcon"></span> <br> Sit amet <span class="orangeIcon"></span> <br> Consectetur <span class="orangeIcon"></span></h1>--}}
{{--                                        <div class="container-arrow-button">--}}
{{--                                            <a class="cta arrow-button" href="#">--}}
{{--                                                an example of link--}}
{{--                                                <svg viewBox="0 0 76.922 65">--}}
{{--                                                    <circle cx="32.5" cy="32.5" r="32" transform="translate(11.922)" fill="none" stroke="#8c97d0" stroke-width="1"></circle>--}}
{{--                                                    <path id="Union_1" data-name="Union 1" d="M-6071.353,33.349l9.643-9.642H-6111v-2h48.941l-9.293-9.294,1.414-1.414,11.881,11.883-11.881,11.881Z" transform="translate(6111 10)" fill="#10112b"></path>--}}
{{--                                                </svg>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="filter"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="swiper-image" data-swiper-parallax-x="3%" style="background-image:url(https://source.unsplash.com/random?sig=43)">--}}
{{--                                    <div class="text-container">--}}
{{--                                        <h1 class="bigTitle">Lorem ipsum dolor<span class="orangeIcon"></span> <br> Sit amet <span class="orangeIcon"></span> <br> Consectetur <span class="orangeIcon"></span></h1>--}}
{{--                                        <div class="container-arrow-button">--}}
{{--                                            <a class="cta arrow-button" href="#">--}}
{{--                                                an example of link--}}
{{--                                                <svg viewBox="0 0 76.922 65">--}}
{{--                                                    <circle cx="32.5" cy="32.5" r="32" transform="translate(11.922)" fill="none" stroke="#8c97d0" stroke-width="1"></circle>--}}
{{--                                                    <path id="Union_1" data-name="Union 1" d="M-6071.353,33.349l9.643-9.642H-6111v-2h48.941l-9.293-9.294,1.414-1.414,11.881,11.883-11.881,11.881Z" transform="translate(6111 10)" fill="#10112b"></path>--}}
{{--                                                </svg>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="filter"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="swiper-image" data-swiper-parallax-x="3%" style="background-image:url(https://source.unsplash.com/random?sig=44)">--}}
{{--                                    <div class="text-container">--}}
{{--                                        <h1 class="bigTitle">Lorem ipsum dolor<span class="orangeIcon"></span> <br> Sit amet <span class="orangeIcon"></span> <br> Consectetur <span class="orangeIcon"></span></h1>--}}
{{--                                        <div class="container-arrow-button">--}}
{{--                                            <a class="cta arrow-button" href="#">--}}
{{--                                                an example of link--}}
{{--                                                <svg viewBox="0 0 76.922 65">--}}
{{--                                                    <circle cx="32.5" cy="32.5" r="32" transform="translate(11.922)" fill="none" stroke="#8c97d0" stroke-width="1"></circle>--}}
{{--                                                    <path id="Union_1" data-name="Union 1" d="M-6071.353,33.349l9.643-9.642H-6111v-2h48.941l-9.293-9.294,1.414-1.414,11.881,11.883-11.881,11.881Z" transform="translate(6111 10)" fill="#10112b"></path>--}}
{{--                                                </svg>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="filter"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="swiper-image" data-swiper-parallax-x="3%" style="background-image:url(https://source.unsplash.com/random?sig=45)">--}}
{{--                                    <div class="text-container">--}}
{{--                                        <h1 class="bigTitle">Lorem ipsum dolor<span class="orangeIcon"></span> <br> Sit amet <span class="orangeIcon"></span> <br> Consectetur <span class="orangeIcon"></span></h1>--}}
{{--                                        <div class="container-arrow-button">--}}
{{--                                            <a class="cta arrow-button" href="#">--}}
{{--                                                an example of link--}}
{{--                                                <svg viewBox="0 0 76.922 65">--}}
{{--                                                    <circle cx="32.5" cy="32.5" r="32" transform="translate(11.922)" fill="none" stroke="#8c97d0" stroke-width="1"></circle>--}}
{{--                                                    <path id="Union_1" data-name="Union 1" d="M-6071.353,33.349l9.643-9.642H-6111v-2h48.941l-9.293-9.294,1.414-1.414,11.881,11.883-11.881,11.881Z" transform="translate(6111 10)" fill="#10112b"></path>--}}
{{--                                                </svg>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="filter"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="swiper-image" data-swiper-parallax-x="3%" style="background-image:url(https://source.unsplash.com/random?sig=46)">--}}
{{--                                    <div class="text-container">--}}
{{--                                        <h1 class="bigTitle">Lorem ipsum dolor<span class="orangeIcon"></span> <br> Sit amet <span class="orangeIcon"></span> <br> Consectetur <span class="orangeIcon"></span></h1>--}}
{{--                                        <div class="container-arrow-button">--}}
{{--                                            <a class="cta arrow-button" href="#">--}}
{{--                                                an example of link--}}
{{--                                                <svg viewBox="0 0 76.922 65">--}}
{{--                                                    <circle cx="32.5" cy="32.5" r="32" transform="translate(11.922)" fill="none" stroke="#8c97d0" stroke-width="1"></circle>--}}
{{--                                                    <path id="Union_1" data-name="Union 1" d="M-6071.353,33.349l9.643-9.642H-6111v-2h48.941l-9.293-9.294,1.414-1.414,11.881,11.883-11.881,11.881Z" transform="translate(6111 10)" fill="#10112b"></path>--}}
{{--                                                </svg>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="filter"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- pagination -->--}}
{{--                        <div class="swiper-pagination showcaseSlider-pagination"></div>--}}

{{--                        <!-- navigation buttons -->--}}
{{--                        <div class="showcaseSlider-nav">--}}
{{--                            <div class="swiper-button-prev showcaseSlider-prev"></div>--}}
{{--                            <div class="swiper-button-next showcaseSlider-next"></div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <a href="#scroll1" class="scrollSliderButton">Scroll <div class="line"></div></a>--}}
{{--                </section>--}}

                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper-image" style="background: url('https://road.cc/sites/default/files/2022-orbea-terra-2.jpeg') no-repeat center center; background-size:cover;"></div>
                            <div class="overlay"></div>
                            <div class="content-wrapper content-right">
                                <div class="content">
                                    <div class="kicker">ORBEA TERRA</div>
                                    <h1>GRAVEL FROM THE GROUND UP</h1>
                                    <p>Designed from the ground up for gravel, Terra isn't a repurposed road bike or a slimmed down mountain bike. Terra IS gravel. Add comfort to your road adventures, finally discover where that dirt trail leads or let your trips spread overnight. There is a wide world out there and Terra is ready to explore it with you.</p>
                                    <a href="" class="button">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-image" style="background: url('https://d1mo5ln9tjltxq.cloudfront.net/-/media/images/my20/bikes/road/gravel/topstone-carbon/topstonecarbon17qa22.ashx?mh=2560&mw=1920&hash=323C6729182132F3B74F4998B12A676E') no-repeat center center; background-size:cover;"></div>
                            <div class="overlay"></div>
                            <div class="content-wrapper">
                                <div class="content">
                                    <div class="kicker">CANNONDALE TOPSTONE</div>
                                    <h1>POSITION TO PLAY</h1>
                                    <p>Relaxed enough to go long, sporty enough to shred, Topstone Carbon offers a riding position that brings comfort and control on all-day adventures and confidence for singletrack sessions.</p>
                                    <a href="" class="button">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-image" style="background: url('https://i.shgcdn.com/6589b327-5a10-47c1-b7bd-441ca22c75e1/-/format/auto/-/preview/3000x3000/-/quality/lighter/') no-repeat center center; background-size:cover;"></div>
                            <div class="overlay"></div>
                            <div class="content-wrapper content-right">
                                <div class="content">
                                    <div class="kicker">OTSO WAHEELA C</div>
                                    <h1>VERSATILITY MEETS PERFORMANCE</h1>
                                    <p>The Waheela C is a carbon-framed drop bar bike with an adjustable geometry, unrivaled ride quality, and enormous tire clearance for 700c x 54mm, 650b x 54mm, or 29" x 2.1" tires.</p>
                                    <a href="" class="button">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-image" style="background: url('https://www.specialized.com/medias/09-ROAD-3212-Gravel-Lander-Diverge-Hero-2880x1620.jpg?context=bWFzdGVyfGltYWdlc3w3ODEyMDd8aW1hZ2UvanBlZ3xpbWFnZXMvaDY5L2g3Yy85MTMxMDk4MDQ2NDk0LmpwZ3wxYTQ2YWQxNmUyNWYzNjIwZjI5NTJmOWRiZDYyYTZjNWEzZDg2N2RhZDhiNDc0ZjEwOGNmYWNkZTVhNTE0MTJl') no-repeat center center; background-size:cover;"></div>
                            <div class="overlay"></div>
                            <div class="content-wrapper content-right">
                                <div class="content">
                                    <div class="kicker">SPECIALIZED DIVERGE</div>
                                    <h1>THE ULTIMATE GETAWAY VEHICLE</h1>
                                    <p>When the road ahead is long and challenging, a smooth ride that delivers confidence, speed, and comfort is mandatory. Meet the Future Shock. It delivers a smooth and confident ride over any terrain, while keeping the frame stiff and nimble for efficient power transfer and precise handling.</p>
                                    <a href="" class="button">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-nav-wrapper">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                <div class="row-full-width">
                </div>
                <div class="row-fluid hidden-lg hidden-md hidden-sm custom_1449213766351 row-has-fill row-o-full-height row-o-columns-middle row-flex style-oIZzi"
                     id="style-oIZzi">
                    <div class="column column_container col-sm-12 hidden-lg hidden-md hidden-sm">
                        <div class="column-inner custom_1449213666600">
                            <div class="wrapper">
                                <h1 class="custom_heading white_stripe style-gqY4P" id="style-gqY4P">
                                    Transport WordPress Theme
                                </h1>
                                <div class="text_column content_element ">
                                    <div class="wrapper">
                                        <p>
                                            <span id="style-E4NBM" class="style-E4NBM">
                                                Starting from loading to unloading and maintaining the highest standards in terms of safety while in transit, we take nothing to chance.
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="btn3-container btn3-inline">
                                    <button class="general btn3 btn3-size-md btn3-shape-round btn3-style-outline btn3-icon-right btn3-color-theme_style_3">
                                        Learn More
                                        <i class="btn3-icon stm-arrow-next">
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-fluid custom_1450264294682">
                    <div class="column column_container col-sm-12 col-lg-6 col-md-6">
                        <div class="column-inner">
                            <div class="wrapper">
                                <div class="text_column content_element ">
                                    <div class="wrapper">
                                        <h2>
                                            <span id="style-pRgto" class="style-pRgto">
                                                WELCOME TO OUR WEBSITE!
                                            </span>
                                        </h2>
                                        <p>
                                            Transcargo makes business flow. As one of the world’s leading
                                            non-asset-based supply chain management companies, we design and implement
                                            industry-leading solutions in both freight management.
                                        </p>
                                        <p>
                                            Over 42,000 dedicated employees, working in 17 regional clusters around the
                                            globe, deliver operational excellence — to provide viable answers to the
                                            most challenging supply chain questions.
                                        </p>
                                    </div>
                                </div>
                                <div class="row inner row-fluid">
                                    <div class="column column_container col-sm-6">
                                        <div class="column-inner">
                                            <div class="wrapper">
                                                <div class="text_column content_element ">
                                                    <div class="wrapper">
                                                        <p>
                                                            <strong>
                                                                MATT GARDNER
                                                                <br>
                                                            </strong>
                                                            <small>
                                                                Chairman &amp; Chief Executive Officer
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column column_container col-sm-6">
                                        <div class="column-inner">
                                            <div class="wrapper">
                                                <div class="single_image content_element align_left  custom_1450267009214">
                                                    <figure class="wrapper figure">
                                                        <div class="single_image-wrapper   box_border_grey">
                                                            <img width="194" height="37"
                                                                 src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/autograph.png"
                                                                 class="single_image-img attachment-full" alt=""
                                                                 decoding="async" loading="lazy">
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="custom_heading no_before custom_1495104670618 style-H2kTt" id="style-H2kTt">
                                    Transport WordPress Theme - Transcargo
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="column column_container col-sm-12 col-lg-6 col-md-6 hidden-sm hidden-xs">
                        <div class="column-inner">
                            <div class="wrapper">
                                <div class="stm_video_popup">
                                    <a href="#" class="fancy_video"
                                       data-wpel-link="external" rel="nofollow external noopener noreferrer">
                                        <img width="540" height="358"
                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/video_preview.jpg"
                                             class="attachment-full" alt="" decoding="async" loading="lazy">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-full-width="true" data-full-width-init="true"
                     class="row-fluid secondary_bg_color custom_1450270522171 style-fIR6j" id="style-fIR6j">
                    <div class="column column_container col-sm-6 col-lg-3 col-md-3">
                        <div class="column-inner custom_1449142338264">
                            <div class="wrapper">
                                <div class="stm_counter">
                                    <div class="icon style-hHUs9" id="style-hHUs9">
                                        <i class="stm-projects-done">
                                        </i>
                                    </div>
                                    <div class="text">
                                        <div class="value" id="counter_60476501623c59bea">
                                            320
                                        </div>
                                        <div class="title">
                                            Projects Done
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column_container col-sm-6 col-lg-3 col-md-3">
                        <div class="column-inner custom_1449142329000">
                            <div class="wrapper">
                                <div class="stm_counter">
                                    <div class="icon style-5S2Ko" id="style-5S2Ko">
                                        <i class="stm-clients-worldwide">
                                        </i>
                                    </div>
                                    <div class="text">
                                        <div class="value" id="counter_18106501623c59eaf">
                                            72
                                        </div>
                                        <div class="title">
                                            Clients Worldwide
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column_container col-sm-6 col-lg-3 col-md-3">
                        <div class="column-inner custom_1449142343672">
                            <div class="wrapper">
                                <div class="stm_counter">
                                    <div class="icon style-o84ii" id="style-o84ii">
                                        <i class="stm-owned-vehicles">
                                        </i>
                                    </div>
                                    <div class="text">
                                        <div class="value" id="counter_85986501623c5a12b">
                                            153
                                        </div>
                                        <div class="title">
                                            Owned Vehicles
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column_container col-sm-6 col-lg-3 col-md-3">
                        <div class="column-inner custom_1449142350247">
                            <div class="wrapper">
                                <div class="stm_counter">
                                    <div class="icon style-gSSvD" id="style-gSSvD">
                                        <i class="stm-people-in-team">
                                        </i>
                                    </div>
                                    <div class="text">
                                        <div class="value" id="counter_71696501623c5a352">
                                            114
                                        </div>
                                        <div class="title">
                                            People in Team
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-full-width">
                </div>
                <div data-full-width="true" data-full-width-init="true" class="row-fluid base_bg_color custom_1450269319951 style-GOW4W" id="style-GOW4W">
                    <div class="column column_container col-sm-12">
                        <div class="column-inner">
                            <div class="wrapper">
                                <div class="services">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                            <h2>
                                                <span id="style-GXEbW" class="style-GXEbW">
                                                    Special Services
                                                </span>
                                            </h2>
                                            <p>
                                                <span id="style-pjVSy" class="style-pjVSy">
                                                    Globally known for our ability to handle every last detail of our customers’ particular logistics and forwarding needs, TransCargo’s Special Services team takes care of all your logistics.
                                                </span>
                                            </p>
                                            <div class="owl-dots" id="owl-nav-6501623c5b461">
                                                <div class="owl-dot active">
                                                    <span></span>
                                                </div>
                                                <div class="owl-dot">
                                                    <span></span>
                                                </div>
                                                <div class="owl-dot">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                            <div class="services_carousel_wr">
                                                <div class="services_carousel owl-carousel owl-theme owl-loaded"
                                                     id="owl-6501623c5b460">
                                                    <div class="owl-stage-outer">
                                                        <div class="owl-stage style-WVYG9" id="style-WVYG9">
                                                            <div class="owl-item style-eLQPH" id="style-eLQPH">
                                                                <div class="item">
                                                                    <div class="item_wr">
                                                                        <div class="item_thumbnail">
                                                                            <a href="#"
                                                                               data-wpel-link="internal">
                                                                                <img width="255" height="170"
                                                                                     src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/dreamstime_xxl_20955694-255x170.jpg"
                                                                                     class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"
                                                                                     alt="" decoding="async">
                                                                            </a>
                                                                        </div>
                                                                        <div class="content">
                                                                            <h6>
                                                                                <a href="#"
                                                                                   data-wpel-link="internal">
                                                                                    Cargo Insurance
                                                                                </a>
                                                                            </h6>
                                                                            <p>
                                                                                Provides a scalable and customizable
                                                                                solution for customers who have programs
                                                                                to retire outdated IT assets.
                                                                            </p>
                                                                            <a href="#"
                                                                               class="read_more"
                                                                               data-wpel-link="internal">
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


                                                            @foreach($products as $product)
                                                                <div class="owl-item active style-oXTtR"
                                                                     id="style-oXTtR">
                                                                    <div class="item">
                                                                        <div class="item_wr">
                                                                            <div class="item_thumbnail">
                                                                                <a href="#" data-wpel-link="internal">
                                                                                    <img width="255" height="170"
                                                                                         src="{{$product->thumbnail}}"
                                                                                         class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"
                                                                                         alt="" decoding="async"
                                                                                         loading="lazy">
                                                                                </a>
                                                                            </div>
                                                                            <div class="content">
                                                                                <h6>
                                                                                    <a href="#"
                                                                                       data-wpel-link="internal">
                                                                                        {{$product->title_vi}}
                                                                                    </a>
                                                                                </h6>
                                                                                <p>
                                                                                    {{$product->short_content_vi}}
                                                                                </p>
                                                                                <a href="#" class="read_more"
                                                                                   data-wpel-link="internal">
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
                                                            @endforeach

                                                        </div>
                                                    </div>
                                                    <div class="owl-controls">
                                                        <div class="owl-nav">
                                                            <div class="owl-prev style-ZFOYj" id="style-ZFOYj">
                                                                prev
                                                            </div>
                                                            <div class="owl-next style-lF8oX" id="style-lF8oX">
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
                <div class="row-full-width">
                </div>
                <div data-full-width="true" data-full-width-init="true" data-parallax="3"
                     data-parallax-image="https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/bg-cta-2.jpg"
                     class="row-fluid convert_to_table overlay custom_1450437407937 row-has-fill row-o-equal-height row-flex general parallax parallax-content-moving style-sCAH8"
                     id="style-sCAH8">
                    <div class="column column_container col-sm-7">
                        <div class="column-inner custom_1450330273622">
                            <div class="wrapper">
                                <h2 style="text-align: left"
                                    class="custom_heading base_font_color heading_without_line">
                                    Reach your destination 100% sure and safe
                                </h2>
                                <div class="text_column content_element ">
                                    <div class="wrapper">
                                        <p>
                                            <span id="style-4UDPk" class="style-4UDPk">
                                                We designed a detailed homepage layouts that will fit any transportation industry size. We will take care of your cargo or your pasenger and deliver them safe and on time!
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="btn3-container btn3-inline">
                                    <a class="general btn3 btn3-size-md btn3-shape-round btn3-style-flat btn3-icon-right btn3-color-theme_style_3"
                                       href="#" title="Contacts"
                                       data-wpel-link="internal">
                                        Contact Now
                                        <i class="btn3-icon stm-arrow-next">
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column_container col-sm-5 hidden-md hidden-sm hidden-xs col-has-fill">
                        <div class="column-inner custom_1450446256472">
                            <div class="wrapper">
                            </div>
                        </div>
                    </div>
                    <div class="parallax-inner skrollable skrollable-before style-dZRIA" data-bottom-top="top: -200%;"
                         data-top-bottom="top: 0%;" id="style-dZRIA">
                    </div>
                </div>
                <div class="row-full-width">
                </div>
                <div class="row-fluid custom_1451973457656">
                    <div class="column column_container col-sm-12 col-lg-6 col-md-7">
                        <div class="column-inner custom_1450446299241">
                            <div class="wrapper">
                                <h2 style="text-align: left" class="custom_heading custom_1450337112571">
                                    Latest News
                                </h2>
                                <div class="news">
                                    <ul class="news_list owl-carousel owl-theme owl-loaded" id="owl-6501623c6065f">
                                        <div class="owl-stage-outer">
                                            <div class="owl-stage style-kQBoW" id="style-kQBoW">
                                                <div class="owl-item style-ZcVez" id="style-ZcVez">
                                                    <li>
                                                        <div class="news_thumbnail">
                                                            <a href="#"
                                                               data-wpel-link="internal">
                                                                <img width="270" height="330"
                                                                     src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_86085293_Subscription_Monthly_M-270x330.jpg"
                                                                     class="attachment-transcargo-image-270x330-croped size-transcargo-image-270x330-croped wp-post-image"
                                                                     alt="" decoding="async" loading="lazy">
                                                            </a>
                                                            <div class="date">
                                                                <div class="day">
                                                                    26
                                                                </div>
                                                                <div class="month">
                                                                    Nov
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="news_content">
                                                            <h4>
                                                                <a href="#"
                                                                   data-wpel-link="internal">
                                                                    Face the challenges of chain complexity
                                                                </a>
                                                            </h4>
                                                            <p>
                                                                Established in 2005, the group has grown to over 30
                                                                people and has completed 900 projects
                                                            </p>
                                                            <a href="#"
                                                               class="read_more" data-wpel-link="internal">
                                                                <em>
                                                                    learn more
                                                                </em>
                                                                <span>
                                                                    →
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </div>
                                                <div class="owl-item active style-KlJH3" id="style-KlJH3">
                                                    <li>
                                                        <div class="news_thumbnail">
                                                            <a href="#"
                                                               data-wpel-link="internal">
                                                                <img width="270" height="330"
                                                                     src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_43887394_Subscription_Monthly_M-270x330.jpg"
                                                                     class="attachment-transcargo-image-270x330-croped size-transcargo-image-270x330-croped wp-post-image"
                                                                     alt="" decoding="async" loading="lazy">
                                                            </a>
                                                            <div class="date">
                                                                <div class="day">
                                                                    24
                                                                </div>
                                                                <div class="month">
                                                                    Nov
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="news_content">
                                                            <h4>
                                                                <a href="#"
                                                                   data-wpel-link="internal">
                                                                    We join the environmental organization CCWG
                                                                </a>
                                                            </h4>
                                                            <p>
                                                                Global leaders in marine container transport, create and
                                                                use practical tools for measuring
                                                            </p>
                                                            <a href="#"
                                                               class="read_more" data-wpel-link="internal">
                                                                <em>
                                                                    learn more
                                                                </em>
                                                                <span>
                                                                    →
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </div>
                                                <div class="owl-item style-vX52j" id="style-vX52j">
                                                    <li>
                                                        <div class="news_thumbnail">
                                                            <a href="#"
                                                               data-wpel-link="internal">
                                                                <img width="270" height="330"
                                                                     src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_77985301_Subscription_Monthly_M-270x330.jpg"
                                                                     class="attachment-transcargo-image-270x330-croped size-transcargo-image-270x330-croped wp-post-image"
                                                                     alt="" decoding="async" loading="lazy">
                                                            </a>
                                                            <div class="date">
                                                                <div class="day">
                                                                    23
                                                                </div>
                                                                <div class="month">
                                                                    Nov
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="news_content">
                                                            <h4>
                                                                <a href="#"
                                                                   data-wpel-link="internal">
                                                                    Tianjin Port Came to a Halt after Explosions
                                                                </a>
                                                            </h4>
                                                            <p>
                                                                The explosion at Binhai Ocean Port in Tianjin caused
                                                                severe damage to many warehouses
                                                            </p>
                                                            <a href="#"
                                                               class="read_more" data-wpel-link="internal">
                                                                <em>
                                                                    learn more
                                                                </em>
                                                                <span>
                                                                    →
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-controls">
                                            <div class="owl-nav">
                                                <div class="owl-prev style-CgwgB" id="style-CgwgB">
                                                    prev
                                                </div>
                                                <div class="owl-next style-RiWCa" id="style-RiWCa">
                                                    next
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                    <div class="news_footer">
                                        <div class="owl-dots" id="owl-nav-6501623c60660">
                                            <div class="owl-dot">
                                                <span>
                                                </span>
                                            </div>
                                            <div class="owl-dot active">
                                                <span>
                                                </span>
                                            </div>
                                            <div class="owl-dot">
                                                <span>
                                                </span>
                                            </div>
                                        </div>
                                        <a class="button size-sm icon_right" href="#" target="_self">
                                            all news
                                            <i class="stm-arrow-next">
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column_container col-sm-12 col-lg-6 col-md-5">
                        <div class="column-inner custom_1450446304318">
                            <div class="wrapper">
                                <h2 style="text-align: left" class="custom_heading custom_1450337066920">
                                    FAQ
                                </h2>
                                <div class="tta-container" data-action="collapse">
                                    <div class="general tta tta-accordion tta-color-theme_style tta-style-outline tta-shape-square tta-o-shape-group tta-controls-align-left tta-o-no-fill">
                                        <div class="tta-panels-container">
                                            <div class="tta-panels">
                                                <div class="tta-panel" id="1450333286729-b84bb545-f459"
                                                     data-content=".tta-panel-body">
                                                    <div class="tta-panel-heading">
                                                        <h4 class="tta-panel-title tta-controls-icon-position-right">
                                                            <a href="#" data-accordion=""
                                                               data-container=".tta-container">
                                                                <span class="tta-title-text">
                                                                    How many times do i have to tell you a few ways?
                                                                </span>
                                                                <i class="tta-controls-icon tta-controls-icon-chevron">
                                                                </i>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div class="tta-panel-body" style="">
                                                        <div class="text_column content_element ">
                                                            <div class="wrapper">
                                                                <p>
                                                                    Progressively generate synergistic total linkage
                                                                    through cross-media intellectual capital.
                                                                    Enthusiastically parallel task team building
                                                                    e-tailers without standards compliant initiatives.
                                                                    Progressively monetize client-centric outsourcing
                                                                    with excellent communities.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tta-panel" id="1450333395266-cee3f8a0-cdaa"
                                                     data-content=".tta-panel-body">
                                                    <div class="tta-panel-heading">
                                                        <h4 class="tta-panel-title tta-controls-icon-position-right">
                                                            <a href="#" data-accordion=""
                                                               data-container=".tta-container">
                                                                <span class="tta-title-text">
                                                                    What is do i have to tell you a few lorem?
                                                                </span>
                                                                <i class="tta-controls-icon tta-controls-icon-chevron">
                                                                </i>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div class="tta-panel-body">
                                                        <div class="text_column content_element ">
                                                            <div class="wrapper">
                                                                <p>
                                                                    Progressively generate synergistic total linkage
                                                                    through cross-media intellectual capital.
                                                                    Enthusiastically parallel task team building
                                                                    e-tailers without standards compliant initiatives.
                                                                    Progressively monetize client-centric outsourcing
                                                                    with excellent communities.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tta-panel active" id="1450333393575-560e10ae-d671"
                                                     data-content=".tta-panel-body">
                                                    <div class="tta-panel-heading">
                                                        <h4 class="tta-panel-title tta-controls-icon-position-right">
                                                            <a href="#" data-accordion=""
                                                               data-container=".tta-container">
                                                                <span class="tta-title-text">
                                                                    I have a technical problem or support issue I need resolved, who do I email?
                                                                </span>
                                                                <i class="tta-controls-icon tta-controls-icon-chevron">
                                                                </i>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div class="tta-panel-body" style="">
                                                        <div class="text_column content_element ">
                                                            <div class="wrapper">
                                                                <p>
                                                                    Progressively generate synergistic total linkage
                                                                    through cross-media intellectual capital.
                                                                    Enthusiastically parallel task team building
                                                                    e-tailers without standards compliant initiatives.
                                                                    Progressively monetize client-centric outsourcing
                                                                    with excellent communities.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tta-panel" id="1450333390085-ccbb2f35-ff19"
                                                     data-content=".tta-panel-body">
                                                    <div class="tta-panel-heading">
                                                        <h4 class="tta-panel-title tta-controls-icon-position-right">
                                                            <a href="#" data-accordion=""
                                                               data-container=".tta-container">
                                                                <span class="tta-title-text">
                                                                    What other services are you compatible with?
                                                                </span>
                                                                <i class="tta-controls-icon tta-controls-icon-chevron">
                                                                </i>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div class="tta-panel-body">
                                                        <div class="text_column content_element ">
                                                            <div class="wrapper">
                                                                <p>
                                                                    Progressively generate synergistic total linkage
                                                                    through cross-media intellectual capital.
                                                                    Enthusiastically parallel task team building
                                                                    e-tailers without standards compliant initiatives.
                                                                    Progressively monetize client-centric outsourcing
                                                                    with excellent communities.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tta-panel" id="1450333387414-6ded1f9e-e822"
                                                     data-content=".tta-panel-body">
                                                    <div class="tta-panel-heading">
                                                        <h4 class="tta-panel-title tta-controls-icon-position-right">
                                                            <a href="#" data-accordion=""
                                                               data-container=".tta-container">
                                                                <span class="tta-title-text">
                                                                    Are you hiring?
                                                                </span>
                                                                <i class="tta-controls-icon tta-controls-icon-chevron">
                                                                </i>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div class="tta-panel-body">
                                                        <div class="text_column content_element ">
                                                            <div class="wrapper">
                                                                <p>
                                                                    Progressively generate synergistic total linkage
                                                                    through cross-media intellectual capital.
                                                                    Enthusiastically parallel task team building
                                                                    e-tailers without standards compliant initiatives.
                                                                    Progressively monetize client-centric outsourcing
                                                                    with excellent communities.
                                                                </p>
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
                     class="row-fluid custom_1450356826637 row-no-padding style-n2hfi" id="style-n2hfi">
                    <div class="column column_container col-sm-12">
                        <div class="column-inner">
                            <div class="wrapper">
                                <div class="testimonials style_2 style-EIzLa" id="owl_wr_6501623c64086">
                                    <div class="container">
                                        <div class="testimonials_carousel_wr">
                                            <div class="testimonials_carousel owl-carousel owl-theme owl-loaded"
                                                 id="owl_6501623c64087">
                                                <div class="owl-stage-outer owl-height style-ZqVVw" id="style-ZqVVw">
                                                    <div class="owl-stage style-zCUQF" id="style-zCUQF">
                                                        <div class="owl-item cloned style-2jAql" id="style-2jAql">
                                                            <div class="item"
                                                                 data-image="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/testimonial_bg_image_2.jpg">
                                                                <p>
                                                                    I’ve been happy with the services provided by
                                                                    TransCargo LLC. Samantha Culligan has been
                                                                    wonderful! She has returned my calls quickly, and
                                                                    she answered all my questions!
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
                                                        <div class="owl-item cloned style-dXGlZ" id="style-dXGlZ">
                                                            <div class="item"
                                                                 data-image="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/testimonial_bg_image_3.jpg">
                                                                <p>
                                                                    This is due to their excellent service, competitive
                                                                    pricing and customer support. That’s becoming so
                                                                    distant and digital, it’s throughly refreshing to
                                                                    get such a personal touch.
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
                                                        <div class="owl-item style-YFe2A" id="style-YFe2A">
                                                            <div class="item"
                                                                 data-image="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/testimonial_bg_image.jpg">
                                                                <p>
                                                                    We were previously using an unreliable company with
                                                                    a very complicated registration and transfer
                                                                    process. Then we found TransCargo and the control
                                                                    came back to us.
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
                                                        <div class="owl-item active style-wm7pi" id="style-wm7pi">
                                                            <div class="item"
                                                                 data-image="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/testimonial_bg_image_2.jpg">
                                                                <p>
                                                                    I’ve been happy with the services provided by
                                                                    TransCargo LLC. Samantha Culligan has been
                                                                    wonderful! She has returned my calls quickly, and
                                                                    she answered all my questions!
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
                                                        <div class="owl-item style-Pbxkd" id="style-Pbxkd">
                                                            <div class="item"
                                                                 data-image="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/testimonial_bg_image_3.jpg">
                                                                <p>
                                                                    This is due to their excellent service, competitive
                                                                    pricing and customer support. That’s becoming so
                                                                    distant and digital, it’s throughly refreshing to
                                                                    get such a personal touch.
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
                                                        <div class="owl-item cloned style-8kzzA" id="style-8kzzA">
                                                            <div class="item"
                                                                 data-image="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/testimonial_bg_image.jpg">
                                                                <p>
                                                                    We were previously using an unreliable company with
                                                                    a very complicated registration and transfer
                                                                    process. Then we found TransCargo and the control
                                                                    came back to us.
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
                                                        <div class="owl-item cloned style-8yyYj" id="style-8yyYj">
                                                            <div class="item"
                                                                 data-image="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/testimonial_bg_image_2.jpg">
                                                                <p>
                                                                    I’ve been happy with the services provided by
                                                                    TransCargo LLC. Samantha Culligan has been
                                                                    wonderful! She has returned my calls quickly, and
                                                                    she answered all my questions!
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
                                                        <div class="owl-prev style-k8heS" id="style-k8heS">
                                                            prev
                                                        </div>
                                                        <div class="owl-next style-8EI21" id="style-8EI21">
                                                            next
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-dots" id="owl-nav-6501623c64088">
                                                <div class="owl-dot">
                                                    <span>
                                                    </span>
                                                </div>
                                                <div class="owl-dot active">
                                                    <span>
                                                    </span>
                                                </div>
                                                <div class="owl-dot">
                                                    <span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-full-width">
                </div>
                <div class="row-fluid custom_1450356867512">
                    <div class="column column_container col-sm-12">
                        <div class="column-inner">
                            <div class="wrapper">
                                <div class="image_carousel_wr grayscale">
                                    <div class="image_carousel owl-carousel owl-theme owl-loaded"
                                         id="owl-6501623c6535a">
                                        <div class="owl-stage-outer">
                                            <div class="owl-stage style-RLpaH d-flex" id="style-RLpaH">
                                                <div class="owl-item active style-GKDFq" id="style-GKDFq">
                                                    <div class="item">
                                                        <img width="268" height="148"
                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/tmarketing-1.jpg"
                                                             class="attachment-full" alt="" decoding="async"
                                                             loading="lazy">
                                                    </div>
                                                </div>
                                                <div class="owl-item active style-pUsZs" id="style-pUsZs">
                                                    <div class="item">
                                                        <img width="268" height="148"
                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/primo-1.jpg"
                                                             class="attachment-full" alt="" decoding="async"
                                                             loading="lazy">
                                                    </div>
                                                </div>
                                                <div class="owl-item active style-ZTGeG" id="style-ZTGeG">
                                                    <div class="item">
                                                        <img width="268" height="148"
                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/kphone-1.jpg"
                                                             class="attachment-full" alt="" decoding="async"
                                                             loading="lazy">
                                                    </div>
                                                </div>
                                                <div class="owl-item active style-JYOfo" id="style-JYOfo">
                                                    <div class="item">
                                                        <img width="268" height="148"
                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/edge-1.jpg"
                                                             class="attachment-full" alt="" decoding="async"
                                                             loading="lazy">
                                                    </div>
                                                </div>
                                                <div class="owl-item active style-GXodF" id="style-GXodF">
                                                    <div class="item">
                                                        <img width="268" height="148"
                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/arcade-1.jpg"
                                                             class="attachment-full" alt="" decoding="async"
                                                             loading="lazy">
                                                    </div>
                                                </div>
                                                <div class="owl-item active style-a5J2B" id="style-a5J2B">
                                                    <div class="item">
                                                        <img width="268" height="148"
                                                             src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/aramiz-1.jpg"
                                                             class="attachment-full" alt="" decoding="async"
                                                             loading="lazy">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-controls">
                                            <div class="owl-nav">
                                                <div class="owl-prev style-Ik5P1" id="style-Ik5P1">
                                                    prev
                                                </div>
                                                <div class="owl-next style-3BLR5" id="style-3BLR5">
                                                    next
                                                </div>
                                            </div>
                                            <div class="owl-dots style-o1xhZ" id="style-o1xhZ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-full-width="true" data-full-width-init="true"
                     class="row-fluid reset-sm-paddings custom_1451973500888 row-has-fill style-o1DoH" id="style-o1DoH">
                    <div class="column column_container col-sm-12 col-lg-5 col-md-6">
                        <div class="column-inner custom_1450444940366">
                            <div class="wrapper">
                                <h2 style="text-align: left" class="custom_heading">
                                    What makes us special?
                                </h2>
                                <div class="text_column content_element ">
                                    <div class="wrapper">
                                        <p>
                                            Over 42,000 dedicated employees, working in 17 regional clusters around the
                                            globe, deliver operational excellence.
                                        </p>
                                    </div>
                                </div>
                                <div class="row inner row-fluid reset-sm-paddings custom_1449127190171">
                                    <div class="column column_container col-sm-6 col-xs-12">
                                        <div class="column-inner custom_1450423994691">
                                            <div class="wrapper">
                                                <div class="stm_icon left icon_position_left">
                                                    <div class="icon style-jBaQC" id="style-jBaQC">
                                                        <i class="stm-packaging-and-storage">
                                                        </i>
                                                    </div>
                                                    <div class="icon_text">
                                                        <div class="title style-oxA1t" id="style-oxA1t">
                                                            Packaging
                                                            <br>
                                                            and Storage
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column column_container col-sm-6 col-xs-12">
                                        <div class="column-inner custom_1450423999162">
                                            <div class="wrapper">
                                                <div class="stm_icon left icon_position_left">
                                                    <div class="icon style-pnvdE" id="style-pnvdE">
                                                        <i class="stm-warehousing-service">
                                                        </i>
                                                    </div>
                                                    <div class="icon_text">
                                                        <div class="title style-honw2" id="style-honw2">
                                                            Warehousing
                                                            <br>
                                                            service
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row inner row-fluid reset-sm-paddings custom_1449127193884">
                                    <div class="column column_container col-sm-6 col-xs-12">
                                        <div class="column-inner custom_1450424067703">
                                            <div class="wrapper">
                                                <div class="stm_icon left icon_position_left">
                                                    <div class="icon style-Qiy3d" id="style-Qiy3d">
                                                        <i class="stm-ground-transport">
                                                        </i>
                                                    </div>
                                                    <div class="icon_text">
                                                        <div class="title style-veokT" id="style-veokT">
                                                            Ground
                                                            <br>
                                                            Transport
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column column_container col-sm-6 col-xs-12">
                                        <div class="column-inner custom_1450424075450">
                                            <div class="wrapper">
                                                <div class="stm_icon left icon_position_left">
                                                    <div class="icon style-a7iJh" id="style-a7iJh">
                                                        <i class="stm-logistic-services">
                                                        </i>
                                                    </div>
                                                    <div class="icon_text">
                                                        <div class="title style-iz5ss" id="style-iz5ss">
                                                            Logistic
                                                            <br>
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
                    <div class="column column_container col-sm-12 col-lg-7 col-md-6">
                        <div class="column-inner custom_1451973486237">
                            <div class="wrapper">
                                <div class="row inner row-fluid reset-sm-paddings">
                                    <div class="base_bg_color column column_container col-sm-12">
                                        <div class="column-inner custom_1450423858601">
                                            <div class="wrapper">
                                                <h2 class="custom_heading style-wVWEd" id="style-wVWEd">
                                                    Request a Free Quote
                                                </h2>
                                                <div class="wpcf7 js" id="f1322-p2-o1" lang="en-US" dir="ltr">
                                                    <div class="screen-reader-response">
                                                        <p role="status" aria-live="polite" aria-atomic="true">
                                                        </p>
                                                        <ul>
                                                        </ul>
                                                    </div>
                                                    <form action="/#f1322-p2-o1" method="post" class="form init"
                                                          aria-label="Contact form" novalidate="novalidate"
                                                          data-status="init">
                                                        <div id="style-kPXLN" class="style-kPXLN">
                                                            <input type="hidden" name="wpcf7" value="1322">
                                                            <input type="hidden" name="version" value="5.7.2">
                                                            <input type="hidden" name="locale" value="en_US">
                                                            <input type="hidden" name="unit_tag" value="f1322-p2-o1">
                                                            <input type="hidden" name="container_post" value="2">
                                                            <input type="hidden" name="posted_data_hash" value="">
                                                        </div>
                                                        <div class="request_quote">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="input-group">
                                                                        <p>
                                                                            <span class="form-control-wrap"
                                                                                  data-name="freight_type">
                                                                                <select class="form-control select select2-hidden-accessible"
                                                                                        aria-invalid="false"
                                                                                        name="freight_type"
                                                                                        tabindex="-1"
                                                                                        aria-hidden="true">
                                                                                    <option value="">
                                                                                        Freight Type
                                                                                    </option>
                                                                                    <option value="Road Transportation">
                                                                                        Road Transportation
                                                                                    </option>
                                                                                    <option value="Air Transportation">
                                                                                        Air Transportation
                                                                                    </option>
                                                                                    <option value="Sea Transportation">
                                                                                        Sea Transportation
                                                                                    </option>
                                                                                    <option value="Warehousing">
                                                                                        Warehousing
                                                                                    </option>
                                                                                </select>
                                                                                <span class="select2 select2-container select2-container--default style-OPJMU"
                                                                                      dir="ltr" id="style-OPJMU">
                                                                                    <span class="selection">
                                                                                        <span class="select2-selection select2-selection--single"
                                                                                              role="combobox"
                                                                                              aria-autocomplete="list"
                                                                                              aria-haspopup="true"
                                                                                              aria-expanded="false"
                                                                                              tabindex="0"
                                                                                              aria-labelledby="select2-freight_type-1p-container">
                                                                                            <span class="select2-selection__rendered"
                                                                                                  id="select2-freight_type-1p-container"
                                                                                                  title="Freight Type">
                                                                                                Freight Type
                                                                                            </span>
                                                                                            <span class="select2-selection__arrow"
                                                                                                  role="presentation">
                                                                                                <b role="presentation">
                                                                                                </b>
                                                                                            </span>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="dropdown-wrapper"
                                                                                          aria-hidden="true">
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="input-group">
                                                                        <p>
                                                                            <span class="form-control-wrap"
                                                                                  data-name="departure_city">
                                                                                <input size="40"
                                                                                       class="form-control text validates-as-required"
                                                                                       aria-required="true"
                                                                                       aria-invalid="false"
                                                                                       placeholder="City of departure"
                                                                                       value="" type="text"
                                                                                       name="departure_city">
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="input-group">
                                                                        <p>
                                                                            <span class="form-control-wrap"
                                                                                  data-name="delivery_city">
                                                                                <input size="40"
                                                                                       class="form-control text"
                                                                                       aria-invalid="false"
                                                                                       placeholder="Delivery city"
                                                                                       value="" type="text"
                                                                                       name="delivery_city">
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="input-group">
                                                                        <p>
                                                                            <span class="form-control-wrap"
                                                                                  data-name="incoterms">
                                                                                <select class="form-control select select2-hidden-accessible"
                                                                                        aria-invalid="false"
                                                                                        name="incoterms" tabindex="-1"
                                                                                        aria-hidden="true">
                                                                                    <option value="">
                                                                                        Incoterms
                                                                                    </option>
                                                                                    <option value="EXW">
                                                                                        EXW
                                                                                    </option>
                                                                                    <option value="FCA">
                                                                                        FCA
                                                                                    </option>
                                                                                    <option value="CPT">
                                                                                        CPT
                                                                                    </option>
                                                                                    <option value="CIP">
                                                                                        CIP
                                                                                    </option>
                                                                                    <option value="DAT">
                                                                                        DAT
                                                                                    </option>
                                                                                    <option value="DAP">
                                                                                        DAP
                                                                                    </option>
                                                                                    <option value="DDP">
                                                                                        DDP
                                                                                    </option>
                                                                                    <option value="FAS">
                                                                                        FAS
                                                                                    </option>
                                                                                    <option value="FOB">
                                                                                        FOB
                                                                                    </option>
                                                                                    <option value="CFR">
                                                                                        CFR
                                                                                    </option>
                                                                                    <option value="CIF">
                                                                                        CIF
                                                                                    </option>
                                                                                </select>
                                                                                <span class="select2 select2-container select2-container--default style-zDTBc"
                                                                                      dir="ltr" id="style-zDTBc">
                                                                                    <span class="selection">

                                                                                        <span class="select2-selection select2-selection--single"
                                                                                              role="combobox"
                                                                                              aria-autocomplete="list"
                                                                                              aria-haspopup="true"
                                                                                              aria-expanded="false"
                                                                                              tabindex="0"
                                                                                              aria-labelledby="select2-incoterms-jv-container">
                                                                                            <span class="select2-selection__rendered"
                                                                                                  id="select2-incoterms-jv-container"
                                                                                                  title="Incoterms">
                                                                                                Incoterms
                                                                                            </span>
                                                                                            <span class="select2-selection__arrow"
                                                                                                  role="presentation">
                                                                                                <b role="presentation">
                                                                                                </b>
                                                                                            </span>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="dropdown-wrapper"
                                                                                          aria-hidden="true">
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="input-group">
                                                                        <p>
                                                                            <span class="form-control-wrap"
                                                                                  data-name="total_weight">
                                                                                <input size="40"
                                                                                       class="form-control text"
                                                                                       aria-invalid="false"
                                                                                       placeholder="Total gross weight (KG)"
                                                                                       value="" type="text"
                                                                                       name="total_weight">
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="input-group">
                                                                        <p>
                                                                            <span class="form-control-wrap"
                                                                                  data-name="dimension">
                                                                                <input size="40"
                                                                                       class="form-control text"
                                                                                       aria-invalid="false"
                                                                                       placeholder="Dimension" value=""
                                                                                       type="text" name="dimension">
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="input-group">
                                                                        <p>
                                                                            <span class="form-control-wrap"
                                                                                  data-name="email">
                                                                                <input size="40"
                                                                                       class="form-control text email validates-as-required validates-as-email"
                                                                                       aria-required="true"
                                                                                       aria-invalid="false"
                                                                                       placeholder="Email" value=""
                                                                                       type="email" name="email">
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="input-group">
                                                                        <p>
                                                                            <span class="form-control-wrap"
                                                                                  data-name="message">
                                                                                <textarea cols="40" rows="10"
                                                                                          class="form-control textarea"
                                                                                          aria-invalid="false"
                                                                                          placeholder="Message"
                                                                                          name="message">
                                                                                </textarea>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="input-group">
                                                                        <p>
                                                                            <button class="button size-sm fullwidth theme-submit">
                                                                                Submit
                                                                                <i class="stm-arrow-next">
                                                                                </i>
                                                                            </button>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p id="style-JqhQV" class="style-JqhQV">
                                                            <label>
                                                                Δ
                                                                <textarea name="ak_hp_textarea" cols="45" rows="8"
                                                                          maxlength="100">
                                                                </textarea>
                                                            </label>
                                                            <input type="hidden" id="ak_js_1" name="ak_js"
                                                                   value="1694589501213">
                                                        </p>
                                                        <div class="response-output" aria-hidden="true">
                                                        </div>
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
                <div class="row-full-width">
                </div>
                <div class="row-full-width">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7450.9429371919005!2d105.75678!3d20.97373!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1694508342108!5m2!1svi!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </article>
    </div>
@endsection

