@extends('layouts.app')

@section('title', '| Contact Me')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1>Contact me</h1>
			<hr>
			<form action="{{ url('contact') }}" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" name="email" id="email" class="form-control" value="">
				</div>
				<div class="form-group">
					<label for="subject">Subject:</label>
					<input type="subject" name="subject" id="subject" class="form-control" value="">
				</div>
				<div class="form-group">
					<label for="message">Message:</label>
					<textarea name="message" name="message" id="message" class="form-control" placeholder="Type your message here..."></textarea>
				</div>
				<input type="submit" class="btn btn-success" value="Send Message">
			</form>
		</div>
	</div>
@endsection
