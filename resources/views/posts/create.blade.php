@extends('layouts.app')

@section('title', '| Create New Post')

@section('stylesheets')
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script>
		tinymce.init({
			selector: 'textarea',
			plugins: 'link code',
			menu: {
				edit: {title: 'Edit', items: 'undo redo | cut, copy, paste'}
			},
			// toolbar: 'undo redo | cut, copy, paste'
		});
	</script>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>

			{!! Form::open(['route' => 'posts.store', 'files' => true]) !!}
			    {{ Form::label('title', 'Title:') }}
				{{ Form::text('title', null, array('class' => 'form-control')) }}

				{{ Form::label('slug', 'Slug:') }}
				{{ Form::text('slug', null, array('class' => 'form-control')) }}

				{{ Form::label('category_id', 'Category:') }}
				<select name="category_id" class="form-control">
					@foreach ($categories as $category)
						<option value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach
				</select>

				{{ Form::label('tags', 'Tags:') }}
				<select name="tags[]" class="form-control select2-multi" multiple="multiple">
					@foreach ($tags as $tag)
						<option value="{{ $tag->id }}">{{ $tag->name }}</option>
					@endforeach
				</select>

				{{ Form::label('featured_image', 'Upload Featured Image:') }}
				{{ Form::file('featured_image') }}

				{{ Form::label('body', 'Post Body:') }}
				{{ Form::textarea('body', null, array('class' => 'form-control')) }}

				{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
			{!! Form::close() !!}
		</div>
	</div>
@endsection

@section('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

	<script type="text/javascript">
		$('.select2-multi').select2();
	</script>
@endsection
