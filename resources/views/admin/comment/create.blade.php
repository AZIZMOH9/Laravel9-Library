@extends('layouts.adminbase')

@section('title','Add product')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Add product</h2>


                </div>
            </div>
            <div class="col-md-16">
                <h3>fill the new product information below:</h3>
                    <form role="form" action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="from-group">
                            <label>parent category</label>

                            <select class="form-control select2" name="category_id" style="...">

                                @foreach($data as $rs)
                                    <option value="{{$rs->id}}">{{\App\Http\Controllers\admin\categoryController::getparentstree($rs,$rs->title)}}</option>
                                @endforeach
                            </select>

                        </div>


                        <div class="form-group">
                            <label>title Input</label>
                            <input type="text" class="form-control" name="title" placeholder="title">
                        </div>
                        <div class="form-group">
                            <label>keyword Input</label>
                            <input type="text" class="form-control" name="keyword" placeholder="keyword">
                        </div>
                        <div class="form-group">
                            <label>price</label>
                            <input type="number" class="form-control" name="price" value="0">
                        </div>
                        <div class="form-group">
                            <label>quantity</label>
                            <input type="text" class="form-control" name="quantity" value="0">
                        </div>
                        <div class="form-group">
                            <label>min quantity</label>
                            <input type="number" class="form-control" name="minquantity" value="0">
                        </div>
                        <div class="form-group">
                            <label>tax%</label>
                            <input type="number" class="form-control" name="tax" value="0">
                        </div>
                        <div class="form-group">
                            <label>description</label>
                            <input type="text" class="form-control" name="description" placeholder="description">
                        </div>
                        <div class="form-group">
                            <label>details</label>
                            <textarea class="form-control" id="detail" name="detail">


                            </textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#detail' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                        </div>


                <label>status</label>
                <select class="form-control">
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

                    <button type="submit" class="btn btn-primary">save</button>
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
