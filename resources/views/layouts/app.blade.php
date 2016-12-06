<!DOCTYPE html>
<html lang="en">
@include('partials._head')
<body>
	@include('partials._nav')

    <div id="app" class="container">
		@include('partials._messages')

        @yield('content')

		@include('partials._footer')
    </div> <!-- /.container -->

    <!-- Scripts -->
	@include('partials._js')
	@yield('scripts')
</body>
</html>
