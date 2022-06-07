@extends('layouts.adminbase')

@section('title','settings')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')






    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Settings</h2>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Tabs
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#general" data-toggle="tab">general</a>
                                </li>
                                <li class=""><a href="#smtpEmail" data-toggle="tab">smtpEmail</a>
                                </li>
                                <li class=""><a href="#helloword" data-toggle="tab">social media</a>
                                </li>
                                <li class=""><a href="#Contactus" data-toggle="tab">Contact us</a>
                                </li>
                                <li class=""><a href="#aboutus" data-toggle="tab">About us</a>
                                </li>
                                <li class=""><a href="#referances" data-toggle="tab">referances</a>
                                </li>
                            </ul>
                            <form role="form" action="{{route('admin.setting.update')}}"  method="post" enctype="multipart/form-data">
                            <div class="tab-content">

                                <div class="tab-pane fade active in" id="general">

                                        @csrf
                                        <div class="form-group">

                                            <input type="hidden" value="{{$data->id}}" id="id" name="id">
                                        </div>
                                        <div class="form-group">

                                            <label>title Input</label>
                                            <input type="text" class="form-control" id="title" name="title" value="{{$data->title}}" placeholder="title">
                                        </div>
                                        <div class="form-group">
                                            <label>description Input</label>
                                            <input type="text" id="description" class="form-control" name="description" value="{{$data->description}}" placeholder="description ">
                                        </div>
                                        <div class="form-group">
                                            <label>keyword Input</label>
                                            <input type="text" class="form-control" id="keyword" name="keyword" value="{{$data->keyword}}" placeholder="keyword">
                                        </div>
                                        <div class="form-group">
                                            <label>company Input</label>
                                            <input type="text" class="form-control" id="company" name="company" value="{{$data->company}}" placeholder="company">
                                        </div>
                                        <div class="form-group">
                                            <label>address Input</label>
                                            <input type="text" class="form-control" id="address" name="addres" value="{{$data->addres}}" placeholder="address">
                                        </div>
                                        <div class="form-group">
                                            <label>phone Input</label>
                                            <input type="text" class="form-control" id="phone" name="phone" value="{{$data->phone}}" placeholder="phone">
                                        </div>
                                        <div class="form-group">
                                            <label>email Input</label>
                                            <input type="text" class="form-control" id="email" name="email" value="{{$data->email}}" placeholder="email">
                                        </div>
                                        <div class="form-group">
                                        <label>status</label>
                                        <select class="form-control" id="stauts">
                                            <option>true</option>
                                            <option>false</option>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label>icon input</label>
                                            <input type="file" name="icon">
                                        </div>
                                </div>

                                <div class="tab-pane fade active in" id="smtpEmail">

                                        <div class="form-group">
                                            <label>smtp server Input</label>
                                            <input type="text" class="form-control" name="" placeholder="title">
                                        </div>
                                        <div class="form-group">
                                            <label>smtp Email Input</label>
                                            <input type="text" class="form-control" name="smtpemail" placeholder="smtpemail">
                                        </div>
                                        <div class="form-group">
                                            <label>smtp pasoword Input</label>
                                            <input type="text" class="form-control" name="smtppasowrd" placeholder="smtppasowrd">
                                        </div>
                                        <div class="form-group">
                                            <label>smtp port Input</label>
                                            <input type="text" class="form-control" name="smtpport" placeholder="smtpport">
                                        </div>
                                        <br>



                                </div>
                                <div class="tab-pane fade" id="helloword">

                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" class="form-control" name="Facebook" placeholder="Facebook">
                                        </div>
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <input type="text" class="form-control" name="Instagram" placeholder="Instagram">
                                        </div>
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="text" class="form-control" name="Twitter" placeholder="Twitter">
                                        </div>
                                        <div class="form-group">
                                            <label>Youtube</label>
                                            <input type="text" class="form-control" name="Youtube" placeholder="Youtube">
                                        </div>
                                        <br>



                                </div>
                                <div class="tab-pane fade" id="Contactus">

                                        <div class="form-group">
                                            <label>contact us</label>
                                            <input type="text" class="form-control" name="contacu us" placeholder="" id="contact">
                                        </div>


                                </div>
                                <div class="tab-pane fade" id="aboutus">
                                    <div class="form-group">
                                        <label>about us</label>
                                        <textarea class="form-control"  id="abouts" name="abouts">{!!$data->abouts!!}</textarea>
                                        <script>
                                            ClassicEditor
                                                .create( document.querySelector( '#abouts' ) )
                                                .then( editor => {
                                                    console.log( editor );
                                                } )
                                                .catch( error => {
                                                    console.error( error );
                                                } );
                                        </script>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="referances">

                                        <div class="form-group">
                                            <label>referances</label>
                                            <input type="text" class="form-control" name="About us" placeholder="">
                                        </div>
                                </div>
                                <button type="submit" class="btn btn-primary">save</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
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

@section('footer')

@endsection

@endsection
