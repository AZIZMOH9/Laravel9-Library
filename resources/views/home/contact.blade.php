

@extends('layouts.frontbased')

@section('title',$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))
@section('content')



<!DOCTYPE HTML>
<html>

	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">





				{!! $setting->contact !!}


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
