@extends('master')

@section('content')

<div class="container">
    <div class="row">
		<form method="POST" action="create/data" role="form" class="col-sm-8 go-right">

			{{csrf_field()}}

			<h2>Create post</h2>

			<div class="form-group">
				<input id="title" name="title" type="text" class="form-control" >
				<label for="title">Post title</label>
			</div>

			<div class="form-group">
				<textarea id="body" name="body" class="form-control" ></textarea>
				<label for="body">Message</label>
			</div>
			
			<div class="form-group col-sm-3 align-center">
		        <input type="submit" id="btn-login" class="btn btn-sm" value="Send">			
		    </div>	
		</form>

		@include('layouts.errors')
	</div>
</div>

@endsection