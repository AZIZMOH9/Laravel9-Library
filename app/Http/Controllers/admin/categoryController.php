<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class categoryController extends Controller
{
    protected $appends =[
        'getparentstree'
    ];

    public static function getparentstree($category,$title){
        if($category->parent_id==0){
            return $title;
        }
        $parent=category::find($category->parent_id);
        $title=$parent->title . '>' .$title;
        return categoryController::getparentstree($parent,$title);
}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=category::all();
       return view('admin.category.index',[
           'data'=>$data
       ]);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=category::all();
        return view('admin.category.create',[
            'data'=>$data]);//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data=new category();
        $data->parent_id= $request->parent_id;
        $data->title= $request->title;
        $data->keywords= $request->keyword;
        $data->status= $request->status;
        $data->description= $request->description;
        if($request->file('image')){
            $data->image=$request->file('image')->store('image');
            }
        $data->save();
        return redirect('admin/category');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category,$id)
    {
        //
        $data=category::find($id);
        return view('admin.category.show',[
            'data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category,$id)
    {
        //
        $data=category::find($id);
        $datalist=category::all();
        return view('admin.category.edit',[
            'data'=>$data,
            'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category,$id)
    {
        //
        $data=category::find($id);
        $data->parent_id= $request->parent_id;
        $data->title= $request->title;
        $data->keywords= $request->keyword;
        $data->status= $request->status;
        $data->description= $request->description;
        if($request->file('image')){
            $data->image=$request->file('image')->store('image');
        }
        $data->save();
        return redirect('admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category,$id)
    {
        //

        $data= category::find($id);
        if ($data->image&& storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('admin/category');
    }
}
