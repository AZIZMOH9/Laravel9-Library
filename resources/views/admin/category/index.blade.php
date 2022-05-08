@extends('layouts.adminbase')

@section('title','category list')

@section('content')

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>category list</h2>
                    <br>
                    <a href="{{route('admin.category.create')}}" class="btn btn-default btn-lg  ">Add category</a>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            category list
                            <a href="{{route('admin.index')}}">home</a></td>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Parent</th>
                                        <th>title</th>
                                        <th>image</th>
                                        <th>status</th>
                                        <th style="width: 40px">edit</th>
                                        <th style="width: 40px">delete</th>
                                        <th style="width: 40px">show</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{\App\Http\Controllers\admin\categoryController::getparentstree($rs,$rs->title)}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>
                                            @if ($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" style="height: 50px">
                                                @endif


                                        </td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}"class="btn btn-primary btn-xs">Edit</a></td>
                                        <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}"class="btn btn-danger btn-xs"
                                            onclick="return confirm('deleting are you sure?')">delete</a></td>
                                        <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}"class="btn btn-success btn-xs">show</a></td>
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
