@extends('layouts.adminbase')

@section('title','edit faq')

@section('head')

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

@endsection

@section('content')

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>edit faq:{{$data->question}}</h2>

                </div>
            </div>
            <div class="col-md-12">
                <h3>Basic Form Examples</h3>
                    <form role="form" action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>question Input</label>
                            <input type="text" class="form-control" name="question" value="{{$data->question}}" >
                        </div>
                        <div class="form-group">
                            <label>answer</label>
                            <textarea class="form-control"  id="detail" name="answer">{!!$data->answer!!}</textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#answer' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>

                        </div>
                    </div>
            <div class="form-group" class="col-md-12">
                <label>status</label>
                <select class="form-control">
                    <option selected>{{$data->status}}</option>
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
