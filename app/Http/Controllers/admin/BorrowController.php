<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Borrow;
use App\Models\Comment;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
    public function index()
    {
        //
        $data= Borrow::all();
        return view('admin.borrow.index',[
            'data'=> $data
        ]);

    }

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
    public function create()
    {
        //
    }

/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
    public function store(Request $request)
    {
        //
    }

/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
    public function show($id)
    {
        $data= Borrow::find($id);
        return view('admin.borrow.show',[
            'data'=> $data
        ]);
    }

/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
    public function edit($id)
    {
        //
    }

/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
    public function update(Request $request, $id)
    {
        $data= Comment::find($id);
        $data->status  = $request->status;
        $data->save();
        return redirect(route('admin.comment.show',['id'=>$id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= Borrow::find($id);
        $data->delete();
        return redirect(route('admin.borrow.index'));
    }
}