@extends('layouts.adminwindow')

@section('title', 'Show Comment : '. $data->title )

@section('content')



    <div id="page-wrapper" >

        <div id="page-inner">

            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="panel panel-default">
                                        <div class="panel-heading"style="background-color:red"> Detail Comment Data</div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <th style="width: 200px">Id</th>
                                                        <td>{{$data->id}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>User</th>
                                                        <td>{{$data->product->title}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>User</th>
                                                        <td>{{$data->user->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Review</th>
                                                        <td>{{$data->review}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Rate</th>
                                                        <td>{{$data->rate}}</td>
                                                    </tr>

                                                    <tr>
                                                        <th>IP Number</th>
                                                        <td>{{$data->IP}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>status</th>
                                                        <td>{{$data->status}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Created Date</th>
                                                        <td>{{$data->created_at}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Update Date</th>
                                                        <td>{{$data->updated_at}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Admin Note : </th>
                                                        <td>
                                                            <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post" >
                                                                @csrf
                                                                <select name="status">
                                                                    <option selected> {{$data->status}}</option>
                                                                    <option>True</option>
                                                                    <option>False</option>
                                                                </select>
                                                                <button type="submit" class="btn btn-default">Update Note</button>
                                                                <button type="reset" class="btn btn-primary">Reset </button>

                                                            </form>
                                                        </td>
                                                    </tr>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
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