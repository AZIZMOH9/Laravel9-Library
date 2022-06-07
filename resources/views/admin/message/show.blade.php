@extends('layouts.adminbase')

@section('title','show product')

@section('content')

    <!-- /. NAV SIDE  -->




    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="table-responsive table-bordered">
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>message</th>
                    <th>note</th>
                    <th>ip</th>
                    <th>update</th>


                    <th style="width: 40px">delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->name}}</td>
                        <td>{{$rs->phone}}</td>
                        <td>{{$rs->email}}</td>
                        <td>{{$rs->message}}</td>
                        <td>{{$rs->note}}</td>
                        <td>{{$rs->ip}}</td>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{asset('assets')}}/assets/admin/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{asset('assets')}}/assets/admin/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{asset('assets')}}/assets/admin/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="{{asset('assets')}}/assets/admin/js/custom.js"></script>



@endsection
