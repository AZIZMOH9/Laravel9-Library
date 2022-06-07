@extends('layouts.adminbase')

@section('title','product list')

@section('content')

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Product list</h2>
                    <br>
                    <a href="{{route('admin.faq.create')}}" class="btn btn-default btn-lg  ">Add question</a>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            product list
                            <a href="{{route('admin.index')}}">home</a></td>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>question</th>
                                        <th>answer</th>
                                        <th>status</th>
                                        <th>edit</th>
                                        <th>delete</th>
                                        <th>show</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->question}}</td>
                                        <td>{{$rs->answer}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}"class="btn btn-primary btn-xs">Edit</a></td>
                                        <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}"class="btn btn-danger btn-xs"
                                               onclick="return confirm('deleting are you sure?')">delete</a></td>
                                        <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}"class="btn btn-success btn-xs">show</a></td>
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
