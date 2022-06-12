@extends('layouts.frontbased')

@section('title', $category->title.' product')

@section('content')

        <br>

        <div class="inner">
            <!-- About Us -->
            <header id="inner">
                <h1>{{$category->title}}</h1>
                <p>.</p>
            </header>

            <br>

            <h2 class="h2">Featured books</h2>

            <!-- Products -->

            <section class="tiles">
                @foreach($products as $rs)
                <article class="" style="height: 220px; width:220px;">
									<span class="image">
										<img src="{{Storage::url($rs->image)}}" style="height: 220px; width:220px;" />
									</span>
                    <a href="/product/{{$rs->id}}">
                        <h2>{{$rs->title}}</h2>
                    </a>
                </article>
                @endforeach
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
                    <img src="images/blog-1-720x480.jpg" class="img-fluid" alt="">

                    <h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

                    <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                </div>

                <div class="col-sm-4 text-center">
                    <img src="images/blog-2-720x480.jpg" class="img-fluid" alt="">

                    <h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

                    <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                </div>

                <div class="col-sm-4 text-center">
                    <img src="images/blog-3-720x480.jpg" class="img-fluid" alt="">

                    <h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

                    <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                </div>
            </div>

            <p class="text-center"><a href="blog.html">Read More &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>


        </div>
    </div>

@endsection