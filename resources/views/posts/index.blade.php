@extends('layouts.app')

@section('title', '| All Posts')

@section('content')
	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('posts.create') }}" class="btn btn-primary btn-block btn-h1-spacing">Create New Post</a>
		</div>
	</div>
@endsection
