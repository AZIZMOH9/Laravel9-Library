
@extends('layouts.adminwindow')

@section('title','product image list')

@section('content')
    <!-- /. NAV SIDE  -->

                    <h2>{{$product->title}}</h2>
                    <br>
    <form role="form" action="{{route('admin.image.store',['pid'=>$product->id])}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>title Input</label>
            <input type="text" class="form-control" name="title" placeholder="title">
        </div>


        <div class="form-group">
            <label>image input</label>
            <input type="file" name="image">
        </div>
        <button type="submit" class="btn btn-primary">save</button>
    </form>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>title</th>
                                        <th>image</th>
                                        <th style="width: 40px">delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($images as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>
                                            @if ($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" style="height: 50px">
                                                @endif


                                        </td>
                                        <td><a href="{{route('admin.image.destroy',['pid'=>$product->id,'id'=>$rs->id])}}"class="btn btn-danger btn-xs"
                                            onclick="return confirm('deleting are you sure?')">delete</a></td>
                                    </tr>
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


