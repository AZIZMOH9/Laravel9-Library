@extends('layouts.frontbased')

@section('title','Appointment | ')


@section('content')
        <div class="banner-section">
            <div class="container text-center wow fadeInUp">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Appointments</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">User requests</h1>


        </div> <!-- .banner-section -->
    </div>


    <div class="page-section">
        <div class="container">
            <b class="col-lg-2" style="color: green">User Menu</b>
            @include('home.user.usermenu')
            <br>
            <br>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 wow fadeInUp">
                        <div class="text-lg">
                            <b class="col-lg-2" style="color: green">User Appointment</b>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Policlinic Name</th>
                                    <th>Name</th>
                                    <th>Appointment Date</th>
                                    <th>Status</th>
                                    <th>Time</th>
                                    <th>Cancel</th>




                                </tr>
                                </thead>
                                <tbody>

                                @foreach( $data as $rs)
                                    <tr>
                                        <td>{{$rs->id }}</td>
                                        <td> @if($rs->product_id) <a href="{{ route('product_id', ['id'=>$rs->product_id]) }}" target="_blank">{{ $rs->product_id->title }}</a> @else No service @endif</td>
                                        <td>{{$rs->name }}</td>
                                        <td>{{$rs->date }}</td>
                                        <td>

                                        </td>
                                        <td>{{$rs->time }}</td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>



                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
    </div>
    </div>



@endsection