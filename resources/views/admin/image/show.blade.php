@extends('layouts.adminbase')

@section('title','show category'.$data->title)

@section('content')

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{$data->title}}</h2>
                </div>
            </div>
            <div class="col-md-16">

                <div class="panel panel-default">
                    <div class="col-md-3">
                        <td><a href="{{route('admin.category.destroy',['id'=>$data->id])}}"class="btn btn-danger btn-lg"
                               onclick="return confirm('deleting are you sure?')">delete</a></td>
                    </div>
                    <div class="col-md-16">
                        <td><a href="{{route('admin.category.edit',['id'=>$data->id])}}"class="btn btn-primary btn-lg ">Edit  </a></td>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <tr>
                                    <th style="width: 200px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                <th style="width: 200px">Parent id </th>
                                    <td>{{\App\Http\Controllers\admin\categoryController::getparentstree($data,$data->title)}}</td>
                                </tr>

                                <tr>
                                    <th>Title</th>
                                    <td>{{$data->title}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$data->status}}</td>
                                </tr>
                                <tr>
                                    <th>Keyword</th>
                                    <td>{{$data->keywords}}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{$data->description}}</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Created_date</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Update_date</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
                <!-- End  Kitchen Sink -->
            </div>
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
