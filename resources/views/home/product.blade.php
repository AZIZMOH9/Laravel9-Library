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
                        <h1>{{$data->title}} <span class="pull-right"><del>${{$data->price *1.6}}</del><br> ${{$data->price}}</span></h1>
                        <br>
                        <p> {{$data->description}}</p>

                        <p>{!!$data->detail!!}.</p>

                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label">Extra 1</label>

                                <div class="form-group">
                                    <select>
                                        <option value="0">Extra 1</option>
                                        <option value="1">Extra 2</option>
                                        <option value="2">Extra 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <label class="control-label">Quantity</label>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="submit" class="primary" value="Add to Cart">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
