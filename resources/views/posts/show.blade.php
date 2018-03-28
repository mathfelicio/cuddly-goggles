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

    <hr>

    <div class="container">
    <div class="row">
        <h3>Send your comment</h3>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="widget-area no-padding blank">
                <div class="status-upload">
                    <form method="POST" action="{{$post->id}}/comments">
                        {{csrf_field()}}

                        <div class="form-group">
                            <input id="title" name="title" type="text" class="form-control" >
                            <label for="title">Comment title</label>
                        </div>

                        <div class="form-group">
                            <textarea id="body" name="body" class="form-control" ></textarea>
                            <label for="body">Message</label>
                        </div>
                        
                        <div class="form-group col-sm-3 align-center">
                            <input type="submit" id="btn-login" class="btn btn-sm" value="Send">            
                        </div>  
                    </form>
                </div><!-- Status Upload  -->
            </div><!-- Widget Area -->
        </div>                      
    </div>
</div>

@endsection