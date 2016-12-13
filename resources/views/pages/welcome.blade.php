@extends('layouts.app')

@section('title', '| Homepage')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h1>Welcome to my blog!</h1>
				<p class="lead">Thank you for visiting. This is my test blog built with Laravel.</p>
				<p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a></p>
			</div>
		</div>
	</div> <!-- /.row -->
	<div class="row">
		<div class="col-md-8">

			@foreach ($posts as $post)

				<div class="post">
					<h3>{{ $post->title }}</h3>
					<p>{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? '...' : '' }}</p>
					<a href="{{ url('blog/' . $post->slug) }}">Read more...</a>
				</div>
				<hr>
			@endforeach

		</div>
		<div class="col-md-3 col-md-offset-1">
			<h2>Siderbar</h2>
		</div>
	</div> <!-- /.row -->
@endsection
