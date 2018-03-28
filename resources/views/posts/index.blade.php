@extends('master')
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')
      
    @include('posts.featured')

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Nexus
          </h3>

          <div id="app" class="blog-post">
            <posts-list></posts-list>
          </div><!-- /.blog-post -->

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

        @include('layouts.sidebar')

      </div><!-- /.row -->

    </main><!-- /.container -->   
    
@endsection


