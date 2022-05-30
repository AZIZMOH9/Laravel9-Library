<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = product::all();
        return view('admin.product.index', [
            'data' => $data
        ]);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = category::all();
        return view('admin.product.create', [
            'data' => $data]);//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new product();
        $data->category_id = $request->category_id;
        $data->user_id = 0;// $request->category_id;
        $data->title = $request->title;
        $data->keyword = $request->keyword;
        $data->status = $request->status;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->minquantity = $request->minquantity;
        $data->tax = $request->tax;
        $data->detail = $request->detail;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('image');
        }
        $data->save();
        return redirect('admin/product');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\product $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product, $id)
    {
        //
        $data = product::find($id);
        return view('admin.product.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product, $id)
    {
        //
        $data = product::find($id);
        $datalist = category::all();
        return view('admin.product.edit', [
            'data' => $data,
            'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product, $id)
    {
        //
        $data = product::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = 0;// $request->category_id;
        $data->title = $request->title;
        $data->keyword = $request->keyword;
        $data->status = $request->status;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->minquantity = $request->minquantity;
        $data->tax = $request->tax;
        $data->detail = $request->detail;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('image');
        }
        $data->save();
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\product $product
     * @return \Illuminate\Http\Response
     */

    public function destroy(product $product, $id)
    {
        //

        $data = product::find($id);
        if ($data->image && storage::disk('public')->exists($data->image)) {
                Storage::delete($data->image);
            }
        $data->delete();
        return redirect('admin/product');
            }
}

