@extends('layouts.frontbased')

@section('title','hello')


@section('content')
        <div class="banner-section">
            <div class="container text-center wow fadeInUp">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Appointments</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">User borrows</h1>
            </div> <!-- .container -->


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
                                    <th>product Name</th>
                                    <th>days</th>
                                    <th>borrow Date</th>
                                    <th>Status</th>
                                    <th>borrow_date</th>
                                    <th>Cancel</th>




                                </tr>
                                </thead>
                                <tbody>

                                @foreach( $borrows as $rs)
                                    <tr>
                                        <td>{{$rs->id }}</td>
                                        <td>{{$rs->product_id }}</td>
                                        <td>{{$rs->days }}</td>
                                        <td>{{$rs->book }}</td>
                                        <td>

                                        </td>
                                        <td>{{$rs->created_at }}</td>
                                        <td><a href="{{route('userpanel.borrowdestroy',['id'=>$rs->id ])}}" onclick="return confirm('Cancelling!! Are you sure?')" class="btn btn-danger btn-sm">Cancel </a></td>


                                    </tr>


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