@extends('layouts.frontbased')

@section('title',$data->title)

@section('content')

    <!-- Main -->
    <div id="main">
        <div class="inner">


            <div class="container-fluid">
                <div class="row">
                    <html>
                    <title>W3.CSS</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                    <style>
                        .mySlides {display:none;}
                    </style>
                    <body >

                        <div class="w3-content w3-display-container" style="height: 500px;width: 800px">
                            <img class="mySlides" src="{{Storage::url($data->image)}}" style="height: 500px;width: 800">
                            @foreach($images as $rs)
                            <img class="mySlides" src="{{Storage::url($rs->image)}}" style="height: 500px;width: 300px">
                            @endforeach
                            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                        </div>

                        <script>
                            var slideIndex = 1;
                            showDivs(slideIndex);

                            function plusDivs(n) {
                                showDivs(slideIndex += n);
                            }

                            function showDivs(n) {
                                var i;
                                var x = document.getElementsByClassName("mySlides");
                                if (n > x.length) {slideIndex = 1}
                                if (n < 1) {slideIndex = x.length}
                                for (i = 0; i < x.length; i++) {
                                    x[i].style.display = "none";
                                }
                                x[slideIndex-1].style.display = "block";
                            }
                        </script>

                    </body>
                    </html>


                    <div class="col-md-7">
                        <h1>{{$data->title}} <span class="pull-right"><br></span></h1>
                        <br>
                        <p> {{$data->description}}</p>

                        <p>{!!$data->detail!!}.</p>
@foreach($reviews as $rs)
    <div class="single-review">
        <div class="review-heading">
            <div><a href="#"><i class="fa fa-uesr-o">{{$rs->user->name}}</i></a>
                <div><a href="#"><i class="fa fa-uesr-o">{{$rs->user->created_at}}</i></a>
                    <div class="review-raiting pull-right">
                        <i class="fa fa-star @if ($rs->rate<1) -0 empty @endif"></i>
                        <i class="fa fa-star @if ($rs->rate<2) -0 empty @endif"></i>
                        <i class="fa fa-star @if ($rs->rate<3) -0 empty @endif"></i>
                        <i class="fa fa-star @if ($rs->rate<4) -0 empty @endif"></i>
                        <i class="fa fa-star @if ($rs->rate<5) -0 empty @endif"></i>
                    </div>
                </div>
                <div class="review-body">
                    <strong>{{$rs->subject}}</strong>
                    <p>{{$rs->review}}</p>
                </div>
            </div>
            @endforeach
                      @include('home.borrow')
            <div class="page-section" >
                <div class="container" >
                    <h1 class="text-center wow fadeInUp">Write Your Rewiev</h1>
                    <form class="main-form" action="{{route('storecomment')}}" method="post">
                        @csrf
                        <input type="hidden"  name="policlinic_id" class="form-control" value="{{$data->id}}" >
                        <div class="row mb-3">
                            <div class="col-sm-6 py-2 wow fadeInLeft">
                                <label for="Subject">Subject</label>
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                            </div>
                            <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                                <label for="rate">Rate</label>
                                <select name="rate" id="rate"  class="custom-select">
                                    <option  value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="col-12 py-2 wow fadeInUp">
                                <label for="comment">Your Comment</label>
                                <textarea id="comment" name="comment" class="form-control" rows="8" placeholder="Enter Your Comment"></textarea>
                            </div>
                        </div>
                        @auth()
                            <button type="submit" class="btn btn-primary wow zoomIn">Submit</button>
                        @else

                            <a href="/login" class="btn btn-danger"> For Submit Your Comment ,Please Login</a>
                        @endauth
                    </form>
            <br>
            <br>

            <div class="container-fluid">
                <h2 class="h2">Similar Products</h2>

                <!-- Products -->
                <section class="tiles">
                    <article class="style1">
										<span class="image">
										<img src="{{asset('assets')}}/images/product-5-720x480.jpg" alt="" />
										</span>
                        <a href="product-details.html">
                            <h2>Lorem ipsum dolor sit amet, consectetur</h2>

                            <p><del>$19.00</del> <strong>$19.00</strong></p>

                            <p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
                        </a>
                    </article>

                    <article class="style2">
										<span class="image">
											<img src="{{asset('assets')}}/images/product-3-720x480.jpg" alt="" />
										</span>
                        <a href="product-details.html">
                            <h2>Lorem ipsum dolor sit amet, consectetur</h2>

                            <p><del>$19.00</del> <strong>$19.00</strong></p>

                            <p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
                        </a>
                    </article>

                    <article class="style3">
										<span class="image">
											<img src="{{asset('assets')}}/images/product-4-720x480.jpg" alt="" />
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
    </div>
@endsection
