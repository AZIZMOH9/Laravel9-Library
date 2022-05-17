<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public static function maincategorylist(){
        return category::where('parent_id','=','0')->with('children')->get();
    }

    public function index(){
        $sliderdata=product::limit(4)->get();
        $productlist1=product::limit(4)->get();
        $setting=Setting::first();
        return view('/home/index',[
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
        'productlist1'=>$productlist1]);

    }
    public function product($id){
        $data=product::find($id);
        $images =DB::table('images')->where('product_id',$id)->get();
        return view('/home/product',['data'=>$data,
            'images'=>$images]);

    }
    public function categoryproducts($id){
        $category=category::find($id);
        $products =DB::table('products')->where('category_id',$id)->get();
        return view('/home/categoryproducts',['category'=>$category,
            'products'=>$products]);

    }


    public function products(){
        return view('/home/products');
    }
    public function about(){

        $setting=Setting::first();
        return view('/home/about',[
            'setting'=>$setting]);

    }
    public function blog(){
        return view('/home/blog');
    }
    public function contact(){

        $setting=Setting::first();
        return view('/home/contact',[
            'setting'=>$setting]);

    }
    public function referance(){

        $setting=Setting::first();
        return view('/home/referance',[
            'setting'=>$setting]);

    }
    public function testimonials(){
        return view('/home/testimonials');
    }
    public function terms(){
        return view('/home/terms');
    }
}
