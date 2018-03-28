@extends('master')

@section('content')
    <div class="blog-post">
        <h2 class="blog-post-title">
            {{$post->title}} 
        </h2>
        <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}</p>
        {{$post->body}}
    </div><!-- /.blog-post -->

        <hr>


    @foreach($post->comments as $comment)
        <div class="media">
            <div class="media-left">
                <img src="http://fakeimg.pl/50x50" class="media-object" style="width:40px">
            </div>

            <div class="media-body">
                <h4 class="media-heading title">{{$comment->title}}</h4>
                <p class="komen">
                    {{$comment->body}}
                </p>
            </div>
        </div>
    @endforeach
@endsection