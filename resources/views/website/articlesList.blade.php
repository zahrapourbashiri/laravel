@extends('website.layouts.layout')
@section('title', 'لیست مقالات')
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
                <li class="breadcrumb-item active" aria-current="page">لیست مقالات</li>
            </ul>
        </div>

    </nav>
    <section class="articles">
        <div class="container mt-5">
            <div class="sectionTitle text-center mt-1">
                <h2 class="text text-center">
                    <span>جدیدترین</span>
                    <b>اخبار و مقالات</b>
                    <span>
را با ما دنبال کنید
                            </span>
                </h2>

            </div>
            <div class="articleItem topArticle d-none d-xl-flex">
                <a href="/article/{{$posts[0]->id}}" class="top-image">
                    <img src="/image/{{$posts[0]->image}}" alt="#" title="#">
                    <div class="details">
                        <span class="date">{{$posts[0]->date}}</span>
                        <h3 class="title">{{$posts[0]->title}}</h3>
                    </div>
                </a>
            </div>
            <div class="row">
                @foreach($posts as $post)
                @if($loop->iteration>1)
                <div class="col-lg-3 col-6">
                    <div class="articleItem">
                        <a href="/article/{{$post->id}}" class="top-image">
                            <img src="/image/{{$post->image}}" alt="#" title="#">
                        </a>
                        <div class="details">
                            <span class="date">{{$post->date}}</span>
                            <a href="/article/{{$post->id}}" class="title">{{$post->title}} </a>
                            <p class="text">
                                @if(strlen($post->text)<200){{$post->text}}@else{{mb_substr($post->text,0,200)."..."}}@endif </p>
                            <a href="/article/{{$post->id}}" class="link">ادامه مطلب <i class="la la-angle-left"></i> </a>
                        </div>
                    </div>
                </div>
                    @endif
                @endforeach

            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination ltr my-5 justify-content-center">
                    <li class="page-item"><a class="page-link " href="#">قبلی</a></li>
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">بعدی</a></li>
                </ul>
            </nav>

        </div>
    </section>

@endsection

@push('script')
    <script>

    </script>
@endpush
