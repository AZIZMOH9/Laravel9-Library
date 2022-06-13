

@extends('layouts.frontbased')

@section('title',$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))
@section('content')






	<div class="row">

				<div class="col-md-6">
					<section>
						<h2>Contact Us</h2>
						<h1>{{\Illuminate\Support\Facades\Session::get('info')}}</h1>
						<form method="post" action="{{route('storemessage')}}">
							@csrf
							<div class="fields">
								<div class="field half">
									<input type="text" name="name" id="name" placeholder="Name" />
								</div>

								<div class="field half">
									<input type="text" name="email" id="email" placeholder="Email" />
								</div>
								<div class="field half">
									<input type="text" name="phone" id="phone" placeholder="phone" />
								</div>

								<div class="field">
									<input type="text" name="subject" id="subject" placeholder="Subject" />
								</div>

								<div class="field">
									<textarea name="message" id="message" rows="3" placeholder="Notes"></textarea>
								</div>

								<div class="field text-right">
									<br>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
									</ul>
								</div>

							</div>
						</form>
					</section>
					<div class="col-md-2">
					<section>
						<h2>Contact Info</h2>

						<ul class="alt">
							<li><span class="fa fa-envelope-o"></span> <a href="#">contact@company.com</a></li>
							<li><span class="fa fa-phone"></span> +1 333 4040 5566 </li>
							<li><span class="fa fa-map-pin"></span> 212 Barrington Court New York, ABC 10001 United States of America</li>
						</ul>

						<h2>Follow Us</h2>

						<ul class="icons">
							<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
						</ul>
					</section>

					<ul class="copyright">
						<li>Copyright © 2020 Company Name </li>
						<li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
					</ul>
					</div>
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
