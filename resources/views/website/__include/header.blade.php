<header id="header">
    <div class="headerTop @if (strpos(Route::currentRouteName(), 'home') !== false) homeHeaderTop @else @endif">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div>بازرگانی آریا : همــراه همیشگی شما</div>
                <div>شماره تماس : <a href="Tel: 05144444400" target="_blank" class="ltr d-inline-block text-white">051
                        44 44 44 00</a></div>
            </div>
        </div>

    </div>
    <div class="container  @if (strpos(Route::currentRouteName(), 'home') !== false) homeHeader @else py-3 @endif">
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="/">

                @if (strpos(Route::currentRouteName(), 'home') !== false)
                    <img src="{{asset('website/img/logowhite2.svg')}}" alt="بازرگانی آریا" height="45px"
                         class="d-none d-lg-block">
                    <img src="{{asset('website/img/logowhite2.svg')}}" alt="بازرگانی آریا" height="45px"
                         class="d-block d-lg-none">
                @else
                    <img src="{{asset('website/img/logowhite2.svg')}}" alt="بازرگانی آریا" height="45px">
                @endif
            </a>

            <div class="menuList">
                <div class="menuClose d-flex d-lg-none">
                    <i class="la la-angle-right ms-2 fs-4"></i>
                    بستن
                </div>

                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @if (strpos(Route::currentRouteName(), 'home') !== false) active @endif"
                           aria-current="page" href="/">صفحه نخست</a>
                    </li>



                    {{--                    <li class="nav-item">--}}
                    {{--                        <a class="nav-link" href="{{route('articlesList')}}">وبلاگ</a>--}}
                    {{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link @if (strpos(Route::currentRouteName(), 'aboutUs') !== false) active @endif"
                           href="/about">درباره ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (strpos(Route::currentRouteName(), 'contactUs') !== false) active @endif"
                           href="/contactUS">تماس با ما</a>
                    </li>

                </ul>
            </div>
            <div class="d-flex align-items-center">
            


                <div class="menuClick d-flex d-lg-none btn btn-light">
                    منو
                    <i class="las la-bars me-2 fs-4"></i>
                </div>
            </div>

        </nav>
    </div>
</header>
