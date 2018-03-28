<div class="blog-post">
    <h2 class="blog-post-title">
       <a href="posts/show/{{$post->id}}"> {{$post->title}} </a>
    </h2>
    <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}</p>
    {{$post->body}}
</div><!-- /.blog-post -->

<nav class="blog-pagination">
    <a class="btn btn-outline-primary" href="#">Older</a>
    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
</nav>
