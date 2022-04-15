
@extends('layouts.frontbased')

@section('title','Anasayfa')

@section('content')

<!DOCTYPE HTML>
<html>

	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->


			<!-- Menu -->


				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Products</h1>

							<div class="image main">
								<img src="{{asset('assets')}}/images/banner-image-6-1920x500.jpg" class="img-fluid" alt="" />
							</div>

							<!-- Products -->
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="{{asset('assets')}}/images/product-1-720x480.jpg" alt="" />
									</span>
									<a href="product-details.html">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>

										<p><del>$19.00</del> <strong>$19.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="{{asset('assets')}}/images/product-2-720x480.jpg" alt="" />
									</span>
									<a href="product-details.html">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>

										<p><del>$19.00</del> <strong>$19.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="{{asset('assets')}}/images/product-3-720x480.jpg" alt="" />
									</span>
									<a href="product-details.html">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>

										<p><del>$19.00</del> <strong>$19.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style4">
									<span class="image">
										<img src="{{asset('assets')}}/images/product-4-720x480.jpg" alt="" />
									</span>
									<a href="product-details.html">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>

										<p><del>$19.00</del> <strong>$19.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style5">
									<span class="image">
										<img src="{{asset('assets')}}/images/product-5-720x480.jpg" alt="" />
									</span>
									<a href="product-details.html">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>

										<p><del>$19.00</del> <strong>$19.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>

								<article class="style6">
									<span class="image">
										<img src="{{asset('assets')}}/images/product-6-720x480.jpg" alt="" />
									</span>
									<a href="product-details.html">
										<h2>Lorem ipsum dolor sit amet, consectetur</h2>

										<p><del>$19.00</del> <strong>$19.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
								</ul>

								&nbsp;
							</section>

							<ul class="copyright">
								<li>Copyright © 2020 Company Name </li>
								<li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
							</ul>
						</div>
					</footer>

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
