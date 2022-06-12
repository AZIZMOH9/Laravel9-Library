@extends('layouts.frontbased')

@section('title',$data->title)

@section('content')

    <!-- Main -->
    <div id="main">
        <div class="inner">

<div class="row">
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

                        <div class="w3-content w3-display-container" style="height: 650px;width: 440px">
                            <img class="mySlides" src="{{Storage::url($data->image)}}" style="height: 650px;width: 380px;">
                            @foreach($images as $rs)
                            <img class="mySlides" src="{{Storage::url($rs->image)}}" style="height: 650px;width: 380px">
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
                </div>
            </div>

</div>

<br>
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
        </div>
    </div>
    @endforeach
            <h2>borrow</h2>
            <br>
            <form class="main-form" action="{{route('storeborrow')}}" method="post">
                @csrf
                <input type="hidden" id="product_id" value="{{$data->id}}" name="product_id">
                <div class="row mb-3">
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <label for="rate">days</label>
                        <select name="days" id="days"  class="custom-select">
                            <option  value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                        </select>
                    </div>
                    <label for="birthday">book date:</label>
                    <input type="date" id="birthday" name="book">
                    <div class="form-group">
                        <label>keyword Input</label>
                        <input type="text" class="form-control" name="note" placeholder="note">
                    </div>
                    <label>status</label>
                    <select class="form-control" name="status">
                        <option>true</option>
                        <option>false</option>
                    </select>
                </div>
                @auth()
                    <button type="submit" class="btn btn-primary wow zoomIn">Submit</button>
                @else

                    <a href="/login" class="btn btn-danger"> For Submit Your Comment ,Please Login</a>
                @endauth
            </form>
<br>
            <div class="page-section" >
                <div class="container" >
                    <h1 class="text-center wow fadeInUp">Write Your Rewiev</h1>
                    <form class="main-form" action="{{route('storecomment')}}" method="post">
                        @csrf
                        <input type="hidden"  name="product_id" class="form-control" value="{{$data->id}}" >
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


    </div>
@endsection
