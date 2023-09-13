<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>@yield('title')</title>
    <!-- Favicons -->
    <link href="{{asset('scss/img/configs.png')}}" rel="icon">
    <link href="{{asset('scss/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,700&family=Inter:wght@400;500;600;700&family=Nunito+Sans:wght@400;500&family=Poppins:wght@300&family=Roboto+Slab:wght@400;500&family=Roboto:wght@500&display=swap"
          rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,400;1,700&family=Inter:wght@400;500;600;700&family=Nunito+Sans:wght@400;500&family=Poppins:wght@300&family=Roboto+Slab:wght@400;500&family=Roboto:wght@500&family=Rubik:wght@300;400;500&display=swap"
          rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Các custom style của frontend -->
    <link rel="stylesheet" href="{{asset('scss/style.css')}}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Các custom style dành riêng cho từng view -->
    @yield('custom-css')
</head>

<body class="animsition">

<!-- Header -->
@include('frontend.layouts.partials.header')

<!-- Content -->
@yield('main-content')

<!-- Footer -->
@include('frontend.layouts.partials.footer')
<!-- Các custom script dành riêng cho từng view -->
@yield('custom-scripts')
<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
<script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
<script src="{{asset('assets/vendor/quill/quill.min.js')}}"></script>
<script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

<script src="{{asset('assets/js/main.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js"></script>
<script src="https://cdn.skypack.dev/splitting@1.0.6"></script>
<script>
    $(document).ready(function() {
        const heroEl = document.querySelector(".hero");
        const fullSizeWrapEl = heroEl.querySelector(".hero__fullsize");
        const contentEls = heroEl.querySelectorAll(".swiper .content");
        const contentFullsizeEls = Array.from(contentEls, (el) => {
            const clone = el.cloneNode(true);
            splitting({ target: clone, by: "words" });
            clone.classList.add(
                "hero__content",
                "hero__content--hidden",
                "content--hero"
            );
            clone.classList.remove("content--slide");
            return clone;
        });

        contentFullsizeEls.forEach((el) => fullSizeWrapEl.appendChild(el));

        const state = {
            topContent: null,
            bottomContent: null
        };

        function slideChange(swiper) {
            const total = swiper.slides.length - swiper.loopedSlides * 2;
            const contentIndex = (swiper.activeIndex - swiper.loopedSlides) % total;

            const content = contentFullsizeEls[contentIndex];
            if (!content) return;

            if (state.bottomContent) {
                state.bottomContent.classList.remove("hero__content--bottom");
                state.bottomContent.classList.add("hero__content--hidden");
            }

            if (state.topContent) {
                state.topContent.classList.remove("hero__content--top");
                state.topContent.classList.add("hero__content--bottom");
            }

            state.bottomContent = state.topContent;
            state.topContent = content;

            const slidetRect = swiper.slides[swiper.activeIndex].getBoundingClientRect();
            const parentRect = heroEl.getBoundingClientRect();

            content.style.transition = "none";
            content.style.left = slidetRect.left - parentRect.left + "px";
            content.style.top = slidetRect.top - parentRect.top + "px";
            content.style.width = slidetRect.width + "px";
            content.style.height = slidetRect.height + "px";
            content.style.borderRadius = "var(--border-radius, 0)";

            content.getBoundingClientRect();

            content.classList.remove("hero__content--hidden");
            content.classList.add("hero__content--top", "hero__content--grow");

            content.style.transition = "";
            content.style.left = "";
            content.style.top = "";
            content.style.width = "";
            content.style.height = "";
            content.style.borderRadius = "";

            const onShowTextEnd = (event) => {
                if (event.target !== event.currentTarget) {
                    event.currentTarget.classList.remove("hero__content--show-text");
                    event.currentTarget.removeEventListener("transitionend", onShowTextEnd);
                }
            };

            const onGrowEnd = (event) => {
                event.currentTarget.classList.remove("hero__content--grow");
                event.currentTarget.classList.add("hero__content--show-text");
                event.currentTarget.addEventListener("transitionend", onShowTextEnd);
            };

            content.addEventListener("transitionend", onGrowEnd, { once: true });
        }

        function swiperInit(swiper) {
            const total = swiper.slides.length - swiper.loopedSlides * 2;
            const contentIndex = (swiper.activeIndex - swiper.loopedSlides) % total;

            const content = contentFullsizeEls[contentIndex];
            if (!content) return;

            content.classList.remove("hero__content--hidden");
            content.classList.add("hero__content--top");
            state.topContent = content;
        }

        const swiper = new Swiper(".swiper", {
            slidesPerView: 3.5,
            spaceBetween: 25,
            loop: true,
            speed: 1000,
            simulateTouch: false,

            autoplay: {
                delay: 1000
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            on: { realIndexChange: slideChange, init: swiperInit }
        });
    })
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>

</html>
