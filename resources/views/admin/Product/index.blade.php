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
                    <a href="{{route('admin.product.create')}}" class="btn btn-default btn-lg  ">Add Product</a>

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
                                        <th>category</th>
                                        <th>title</th>
                                        <th>price</th>
                                        <th>quantity</th>
                                        <th>image</th>
                                        <th>image Gallery</th>
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
                                        <td>{{$rs->price}}</td>
                                        <td>{{$rs->quantity}}</td>
                                        <td>
                                            @if ($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" style="height: 50px">
                                                @endif


                                        </td>

                                        <td><a href="{{route('admin.image.index',['pid'=>$rs->id])}}"
                                               onclick="return !window.open(this.href,'','top=50 left=100 widthn=1100,height=700')">
                                                <img src="{{asset('assets')}}/assets/admin/img/image.jpg" style="height: 50px"></a>
                                        </td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin.product.edit',['id'=>$rs->id])}}"class="btn btn-primary btn-xs">Edit</a></td>
                                        <td><a href="{{route('admin.product.destroy',['id'=>$rs->id])}}"class="btn btn-danger btn-xs"
                                            onclick="return confirm('deleting are you sure?')">delete</a></td>
                                        <td><a href="{{route('admin.product.show',['id'=>$rs->id])}}"class="btn btn-success btn-xs">show</a></td>
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
