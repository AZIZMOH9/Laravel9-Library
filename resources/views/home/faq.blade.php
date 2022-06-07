
@extends('layouts.frontbased')

@section('title',$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))
@section('head')
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
	<script>
		$( function() {
			$( "#accordion" ).accordion();
		} );
@endsection

@section('content')


<!DOCTYPE HTML>
<html>

	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

					<div id="main">

					</div>
				<div id="accordion">
@foreach($datalist as $rs)
					<h3>{{$rs->question}}</h3>
					<div>
						<p>{!! $rs->answer !!}</p>
					</div>
				@endforeach
				</div>
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
