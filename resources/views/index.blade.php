<section class="posts-section">
    <h2 class="section-title">آخرین مطالب</h2>

    <div class="posts-grid">

        @foreach($posts as $post)
            <!-- پست ۱ -->
            <article class="post-card">
                <img src="/image/{{$post->image}}" alt="برنامه نویسی" class="post-image">
                <div class="post-content">
                    <span class="post-category">{{$post->category->title}}</span>
                    <h3 class="post-title"><a href="#">{{$post->title}}</a></h3>
                    <p class="post-excerpt"> @if(strlen($post->text)<200){{$post->text}}@else{{mb_substr($post->text,0,200)."..."}}@endif</p>
                    <div class="post-meta">
                        <span><i class="far fa-calendar-alt"></i>{{$post->date}}</span>
                        <span><i class="far fa-eye"></i> {{$post->view_number}} بازدید</span>
                    </div>
                </div>
            </article>

        @endforeach
    </div>
</section>
