@extends('layouts.frontbased')

@section('title',$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))


@section('content')
    <!-- Main -->
    <div id="main">
        @include('home.slider')

        <br>
        <br>

        <div class="inner">
            <!-- About Us -->
            <header id="inner">
                <h1>Find your new book!</h1>
                <p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
            </header>

            <br>

            <h2 class="h2">Featured Products</h2>

            <!-- Products -->
            <section class="tiles">
                @foreach($productlist1 as $rs)
                <article class="style1">
									<span class="image">
										<img src="{{Storage::url($rs->image)}}" style="height: 220px; width:480px;" />
									</span>
                    <a href="{{route('product',['id'=>$rs->id])}}">
                        <h2>{{$rs->title}}</h2>

                        <p><del>${{$rs->price*1.5}}</del> <strong>${{$rs->price}}</strong></p>

                        <p>${{$rs->keyword}}</p>
                    </a>
                </article>
                @endforeach
                <article class="style2">
									<span class="image">
										<img src="{{asset('assets')}}/images/product-2-720x480.jpg" alt="" />
									</span>
                    <a href="{{route('product',['id'=>$rs->id])}}">
                        <h2>Lorem ipsum dolor sit amet, consectetur</h2>

                        <p><del>$19.00</del> <strong>$19.00</strong></p>

                        <p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
                    </a>
                </article>
                <article class="style3">
									<span class="image">
										<img src="{{asset('assets')}}/images/product-3-720x480.jpg" alt="" />
									</span>
                    <a href="{{route('product',['id'=>$rs->id])}}">
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

            <p class="text-center"><a href="products.html">More Books &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

            <br>

            <h2 class="h2">Testimonials</h2>

            <div class="row">
                <div class="col-sm-6 text-center">
                    <p class="m-n"><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt delectus mollitia, debitis architecto recusandae? Quidem ipsa, quo, labore minima enim similique, delectus ullam non laboriosam laborum distinctio repellat quas deserunt voluptas reprehenderit dignissimos voluptatum deleniti saepe. Facere expedita autem quos."</em></p>

                    <p><strong> - John Doe</strong></p>
                </div>

                <div class="col-sm-6 text-center">
                    <p class="m-n"><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt delectus mollitia, debitis architecto recusandae? Quidem ipsa, quo, labore minima enim similique, delectus ullam non laboriosam laborum distinctio repellat quas deserunt voluptas reprehenderit dignissimos voluptatum deleniti saepe. Facere expedita autem quos."</em></p>

                    <p><strong>- John Doe</strong> </p>
                </div>
            </div>

            <p class="text-center"><a href="testimonials.html">Read More &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

            <br>

            <h2 class="h2">Blog</h2>

            <div class="row">
                <div class="col-sm-4 text-center">
                    <img src="public/assets/images/blog-1-720x480.jpg" class="img-fluid" alt="" />

                    <h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

                    <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                </div>

                <div class="col-sm-4 text-center">
                    <img src="public/assets/images/blog-2-720x480.jpg" class="img-fluid" alt="" />

                    <h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

                    <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                </div>

                <div class="col-sm-4 text-center">
                    <img src="public/assets/images/blog-3-720x480.jpg" class="img-fluid" alt="" />

                    <h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

                    <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                </div>
            </div>

            <p class="text-center"><a href="blog.html">Read More &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>


        </div>
    </div>

@endsection
