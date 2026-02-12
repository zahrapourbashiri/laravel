@extends('website.layouts.layout')
@section('title', 'جزئیات مقاله')
@section('description')
@endsection
@push('style')

@endpush

@section('content')
    <nav class="breadcrumbBox" style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
        <div class="container">
            <ul class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/" class="d-flex align-items-center">
                        <img src="{{asset('website/img/home.svg')}}" height="20" class="ms-2">
                        صفحه نخست</a></li>
                <li class="breadcrumb-item"><a href="/articles">لیست مقالات</a></li>
                <li class="breadcrumb-item active" aria-current="page">معرفی قطعات موتور خودرو و کاربرد آنها</li>
            </ul>
        </div>

    </nav>
    <div class="container py-lg-5 py-4">
        <div class="row">
            <div class="col-lg-9">
                <section class="article">
                    <article>
                        <img src="{{asset('image/'.$post->image)}}" alt="#" title="#" class="w-100 top-image">
                        <div class="d-flex align-items-center">
                            <div class="date ms-4">
                                <img src="{{asset('website/img/Calendar.svg')}}">
                                {{$post->date}}
                            </div>
                            <div class="category">
                                <img src="{{asset('website/img/Widget 4.svg')}}">
                                دسته : <span class="badge bg-danger mx-1 fw-normal">آموزشی</span>
                            </div>
                        </div>


                        <h1 class="title" id="titr1">
                            {{$post->title}}
                        </h1>
                        <div class="articleDetails">
                            <p>
                                {{$post->text}}
                            </p>
                    </article>
                </section>
            </div>

            <div class="col-lg-3">
                <div class="sidebar">
                    <a href="#" class="adver w-100 d-block">
                        <img src="{{asset('website/img/adver.png')}}" alt="#" title="#" class="w-100 rounded-4">
                    </a>

                    <div class="sidebarBox">
                        <div class="sidebarTitr">جدیدترین مقالات</div>
                        <ul class="suggestArticles">
                            @foreach($posts as $p)
                            <li class="item">
                                <div class="d-flex align-items-center">
                                    <a href="/article/{{$p->id}}" class="image">
                                        <img src="{{asset('image/'.$p->image)}}" alt="#" title="#">
                                    </a>
                                    <a href="#" class="title">{{$p->title}} </a>
                                </div>
                                <span class="date">{{$p->date}}</span>

                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@push('script')
    <script>

    </script>
@endpush
