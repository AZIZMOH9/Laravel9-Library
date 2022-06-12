@extends('layouts.adminbase')

@section('title', ' borrow list')

@section('content')



    <div id="page-wrapper" >
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">home</a> </li>
            <li class="breadcrumb-item active">Comments List</li>
        </ol>

        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-default">
                        <div class="panel-heading"> borrow List</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>product id</th>
                                        <th>User</th>
                                        <th>book</th>
                                        <th>reuturn</th>
                                        <th style="width: 110px">Show</th>
                                        <th style="width: 110px">Delete</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $data as $rs)
                                        <tr class="success"><td>{{$rs->id}}</td>
                                            <td>{{$rs->product_id}}</td>
                                            <td>{{$rs->user->name}}</td>
                                            <td>{{$rs->book}}</td>
                                            <td>{{$rs->return}}</td>
                                            <td>{{$rs->status}}</td>

                                            <td>
                                                <a href="{{route('admin.borrow.show',['id'=>$rs->id])}}"
                                                   onclick="return !window.open(this.href, ' ', 'top=50 left=100 width=1000, height=700')"class="btn btn-success">
                                                    Show
                                                </a>
                                            </td>

                                            <td><a href="{{route('admin.comment.destroy',['id'=>$rs->id])}}"></a><a onclick="return confirm('DELETING!! ARE YOU SURE??')" class="btn btn-danger ">Delete</a></td>


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

@endsection