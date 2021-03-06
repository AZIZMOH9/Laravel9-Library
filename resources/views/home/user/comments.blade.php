@extends('layouts.frontbased')

@section('title','hello')



@section('content')
    <div class="row">
    <div class="col-md-2">
        <section>
            <h2>user menu</h2>
            <div>
                @include('home.user.usermenu')
            </div>
        </section>
    </div>
    <div class="col-md-8">
        <section>
            <h2>comments</h2>
            <div>
                <div class="panel-body">
                    <div class="table-responsive" >
                        <table class="table table-striped table-bordered table-hover" >
                            @foreach($comments as $rs)
                            <tr>
                                <th>id</th>
                                <td>{{$rs->id}}</td>
                                <td><a href=""</td>
                            </tr>
                                <tr>
                                    <th>comment</th>
                                    <td>{{$rs->review}}</td>
                                </tr>

                            <tr>
                                <th>subject </th>
                                <td>{{$rs->subject}}</td>
                            </tr>
                                <tr>
                                    <th>Rate</th>
                                    <td>{{$rs->rate}}</td>
                                </tr>
                            <tr>
                                <th>Created Date</th>
                                <td>{{$rs->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Update Date</th>
                                <td>{{$rs->updated_at}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </div>
    </div>







@endsection
