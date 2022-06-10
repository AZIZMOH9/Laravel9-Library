@extends('layouts.adminbase')

@section('title','show user')

@section('content')

    <!-- /. NAV SIDE  -->




    <!--PAGE CONTENT -->



    <!--PAGE CONTENT -->
    <div class="col-lg-20">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Detail User Data</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive" >
                    <table class="table table-striped table-bordered table-hover" >
                        <tr>
                            <th>Id</th>
                            <td>{{$data->id}}</td>
                        </tr>

                        <tr>
                            <th>Name & Surname </th>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$data->email}}</td>
                        </tr>

                        <tr>
                            <th>Roles</th>
                            <td>
                                @foreach($data->roles as $role)
                                    {{$role->name}}
                                    <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id ])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-danger btn-sm">[x]</a>

                                @endforeach
                            </td>
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
                            <th>Add Role To User</th>
                            <td>
                                <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id ])}}" method="post" >
                                    @csrf
                                    <select name="role_id">
                                        @foreach($roles as $role)

                                            <option value="{{$role->id}}">{{$role->name}} </option>
                                        @endforeach
                                    </select>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-info"> Add Role</button>
                                    </div>

                                </form>
                            </td>
                        </tr>




                    </table>
                </div>
            </div>
        </div>
    </div>










    <!-- END RIGHT STRIP  SECTION -->


    <!--END MAIN WRAPPER -->
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
