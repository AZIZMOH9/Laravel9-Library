
@extends('layouts.frontbased')

@section('title')



@section('content')


<!DOCTYPE HTML>
<html>

	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

					<div id="main">

					</div>

              @include('auth.register')

			</div>

		<!-- Scripts -->
			<script src="{{asset('assets')}}/assets/js/jquery.min.js"></script>
			<script src="{{asset('assets')}}/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="{{asset('assets')}}/assets/js/jquery.scrolly.min.js"></script>
			<script src="{{asset('assets')}}/assets/js/jquery.scrollex.min.js"></script>
			<script src="{{asset('assets')}}/assets/js/main.js"></script>
	</body>
</html>
@endsection
