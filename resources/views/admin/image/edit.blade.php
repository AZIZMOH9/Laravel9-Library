@extends('layouts.adminbase')

@section('title','edit category'.$data->title)

@section('content')

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>edit category:{{$data->title}}</h2>

                </div>
            </div>
            <div class="col-md-6">
                <h3>Basic Form Examples</h3>
                    <form role="form" action="{{route('admin.category.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Parent Category</label>
                            <select class="form-control select2" name="parent_id" style="...">
                                <option value="0" selected="selected">main category</option>
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}">{{\App\Http\Controllers\admin\categoryController::getparentstree($rs,$rs->title)}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>title Input</label>
                            <input type="text" class="form-control" name="title" value="{{$data->title}}" >
                        </div>
                        <div class="form-group">
                            <label>keyword Input</label>
                            <input type="text" class="form-control" name="keyword" value="{{$data->keywords}}">
                        </div>
                        <div class="form-group">
                            <label>description Input</label>
                            <input type="text" class="form-control" name="description" value="{{$data->description}}">
                        </div>
                    </div>
            <div class="form-group">
                <label>status</label>
                <select class="form-control">
                    <option selected>{{$data->status}}</option>
                    <option>true</option>
                    <option>false</option>
                </select>
            </div>

                    <div class="form-group">
                        <label>image input</label>
                        <input type="file" name="image">
                    </div>



                    <div class="form-group">
                        <label>Select Example</label>
                        <select class="form-control" name="status">
                            <option>true</option>
                            <option>false</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">update data</button>
                    <button type="reset" class="btn btn-default">Reset Button</button>






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
