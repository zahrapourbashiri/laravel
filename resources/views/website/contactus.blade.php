@extends('website.layouts.layout')
@section('title', ' تماس با ما')
@section('description')
@endsection
@push('style')

@endpush

@section('content')
<main class="main">
    <nav class="breadcrumbBox" style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
        <div class="container">
            <ul class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="https://aryaps.com" class="d-flex align-items-center">
                        <img src="https://aryaps.com/website/img/home.svg" height="20" class="ms-2">
                        صفحه نخست</a></li>
                <li class="breadcrumb-item active" aria-current="page">ارتباط با ما</li>
            </ul>
        </div>
    </nav>
    <section class="map2" style="max-width: unset; margin: 0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d390.974814162326!2d57.658793351643844!3d36.20425619491034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f724b000d7aea4b%3A0x8953f9def56fb549!2z2KjYp9iy2LHar9in2YbbjCDYotix24zYpw!5e0!3m2!1sen!2s!4v1736948709971!5m2!1sen!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" http-equiv="Content-Security-Policy" sandbox="allow-scripts"></iframe>
    </section>
    <section class="pb-5 mb-5">
        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="sectionTitle mt-1 mb-0">
                        <h2 class="text text-center">
                            <span class="smallText text-center">ارتباط با</span>
                            <br>
                            <span> بازرگانی آریا</span>
                        </h2>

                    </div>
                    <p class="text text-center">
                        برای ارتباط با شرکت بازرگانی آریا میتوانید از طریق راههای زیر اقدام نمایید. این شرکت هر روزِ
                        هفته به جز روز های جمعه و روزهای تعطیل رسمی آماده پاسخگویی می باشد.
                    </p>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="contactItems">
                        <div class="icon">
                            <img src="https://aryaps.com/website/img/Phone.svg" alt="#">
                        </div>
                        <div class="details">
                            <div class="title">شماره تماس</div>
                            <div class="subtitle ltr"> 051 44 44 44 00</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="contactItems">
                        <div class="icon">
                            <img src="https://aryaps.com/website/img/Letter2.svg" alt="#">
                        </div>
                        <div class="details">
                            <div class="title">ایمیل</div>
                            <div class="subtitle ltr"> aryaps@info.com</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="contactItems">
                        <div class="icon">
                            <img src="https://aryaps.com/website/img/Smartphone3.svg" alt="#">
                        </div>
                        <div class="details">
                            <div class="title">همراه</div>
                            <div class="subtitle ltr"> +98 915 089 9904</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="contactItems">
                        <div class="icon">
                            <img src="https://aryaps.com/website/img/android.svg" alt="#">
                        </div>
                        <div class="details">
                            <div class="title">اپلیکیشن اندروید</div>
                            <a href="#" class="subtitle ltr"> لینک دانلود اپلیکیشن </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="contactItems">
                        <div class="icon">
                            <img src="https://aryaps.com/website/img/MapPoint2.svg" alt="#">
                        </div>
                        <div class="details">
                            <div class="title">آدرس</div>
                            <div class="subtitle ltr">خراسان رضوی - سبزوار - بلوار بوتان گاز -انتهای خاوران 1 -
                                بازرگانی
                                آریا (پوربشیری)
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="contactItems">
                        <div class="icon">
                            <img src="https://aryaps.com/website/img/Call Chat.svg" alt="#">
                        </div>
                        <div class="details">
                            <div class="title">ساعات پاسخگویی</div>
                            <div class="subtitle ltr">شنبه تا چهارشنبه : صبح ها از 08:00 الی 13:00 _ عصرها از 16:00
                                الی
                                19:00
                            </div>
                            <div class="subtitle ltr">پنج شنبه : صبح ها از 08:00 الی 13:00</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>
@endsection
