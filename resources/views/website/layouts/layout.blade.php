<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta content="" name="description"/>
    <meta content="Aryaps" name="author"/>
    <meta name="keywords"
          content="بازرگانی آریا، پخش قطعات خودرو"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="google" content="notranslate">
    <meta name="msapplication-TileColor" content="#212121"/>
    <meta name="theme-color" content="#CC0A0A"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>

    <link rel="shortcut icon" href="{{asset('favicon/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('favicon/favicon.ico')}}" type="image/x-icon">
    <meta name="token" content="{{csrf_token()}}">
    <title>@yield('title') | بازرگانی آریا </title>

    @yield('metaTags')


    <link rel="icon" type="image/x-icon"
          href="">
    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('website/css/line-awesome.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('website/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('website/css/owl.theme.default.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('website/css/glightbox.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('website/css/main.css') }}" type="text/css">


    @stack('style')

</head>

<body>

@include('website.__include.header')
<main class="main">
    @yield('content')
</main>
    @include('website.__include.footer')
<div class="d-lg-none d-block">
    @include('website.__include.navigation')
</div>


</body>

<!-- Scripts -->

<script src="{{ asset('website/js/jquery-3.6.4.min.js') }}"></script>
<script src="{{ asset('website/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('website/js/owl.carousel.js') }}"></script>
<script src="{{ asset('website/js/glightbox.min.js') }}"></script>
@stack('script')

<script>
    $('.topScroll').click(function () {
        document.documentElement.scrollTop = 0;
    });

    $('body').on('click', 'header .menuClick', function () {
        $('.menuList').addClass('show')
    });
    $('body').on('click', '.menuClose', function () {
        $('.menuList').removeClass('show')
    });

    let lastScrollTop = 0;
    const header = document.getElementById('header');

    window.addEventListener('scroll', () => {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            // اسکرول به پایین
            header.style.top = '-100%';
            header.style.background='#fff';// ارتفاع هدر
        } else {
            // اسکرول به بالا
            header.style.top = '0';
        }
        lastScrollTop = scrollTop;
    });
</script>
<script src="{{ asset('website/js/main.js') }}"></script>

</html>
