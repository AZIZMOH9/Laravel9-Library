<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    public function index(){
        $sliderdata=product::limit(4)->get();
        $productlist1=product::limit(4)->get();
        return view('/home/index',['sliderdata'=>$sliderdata,
        'productlist1'=>$productlist1]);

    }
    public function product($id){
        $data=product::find($id);
        $images =DB::table('images')->where('product_id',$id)->get();
        return view('/home/product',['data'=>$data,
            'images'=>$images]);

    }


    public function products(){
        return view('/home/products');
    }
    public function about(){
        return view('/home/about');
    }
    public function blog(){
        return view('/home/blog');
    }
    public function contact(){
        return view('/home/contact');
    }
    public function testimonials(){
        return view('/home/testimonials');
    }
    public function terms(){
        return view('/home/terms');
    }
}
