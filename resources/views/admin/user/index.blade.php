@extends('layouts.adminbase')

@section('title','user list')

@section('content')

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>user list</h2>
                    <br>


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            user list
                            <a href="{{route('admin.index')}}">home</a></td>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>role</th>
                                        <th>status</th>
                                        <th style="width: 40px">delete</th>
                                        <th style="width: 40px">show</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $rs)
                                    <tr>
                                        <td>{{$rs->name}}</td>
                                        <td>{{$rs->email}}</td>
                                        <td>@foreach($rs->roles as $role)
                                                {{$role->name}}
                                            @endforeach
                                        </td>
                                        <td></td>
                                        <td><a href="{{route('admin.user.destroy',['id'=>$rs->id])}}"class="btn btn-danger btn-xs"
                                            onclick="return confirm('deleting are you sure?')">delete</a></td>
                                        <td><a href="{{route('admin.user.show',['id'=>$rs->id])}}"class="btn btn-success btn-xs">show</a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

            </div>
            </div>
            <!-- /. ROW  -->
            <hr />

        </div>
        <!-- /. PAGE INNER  -->

    </div>
    <!-- /. PAGE WRAPPER  -->
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
