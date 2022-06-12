<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $reviews=Comment::where('product_id',$id)->get();
        return view('/home/product',['data'=>$data,
            'images'=>$images,
            'reviews'=>$reviews]);

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
    public function storeborrow(Request $request){
        $data=new Borrow();
        $data->user_id= Auth::id();
        $data->days= $request->input('days');
        $data->note= $request->input('note');
        $data->status= $request->input('status');
        $data->book= $request->input('book');
        $data->product_id= $request->input('product_id');
        $data->ip=request()->ip();
        $data->save();
        return redirect()->route('index')->with('info','your request has been sent,thank you');    }
    public function storemessage(Request $request){
        //dd($request);
        $data=new Message();
        $data->name= $request->input('name');
        $data->email= $request->input('email');
        $data->subject= $request->input('subject');
        $data->phone= $request->input('phone');
        $data->message= $request->input('message');
        $data->ip=request()->ip();
        $data->save();
        return redirect()->route('contact')->with('info','your message has been sent,thank you');
    }
    public function storecomment(Request $request){
        //dd($request);
        $data=new Comment();
        $data->user_id= Auth::id();
        $data->product_id= $request->input('product_id');
        $data->subject= $request->input('subject');
        $data->review= $request->input('review');
        $data->rate= $request->input('rate');
        $data->ip=request()->ip();
        $data->save();
        return redirect()->route('product',['id'=>$request->input('product_id')] )->with('info','your comment has been sent,thank you');
    }
    public function contact(){

        $setting=Setting::first();
        return view('/home/contact',[
            'setting'=>$setting]);

    }
    public function faq(){

        $setting=Setting::first();
        $datalist=Faq::all();
        return view('/home/faq',[
            'setting'=>$setting,
            'datalist'=>$datalist]);

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
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/home');


    }
    public function loginadmincheck(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }
    }
}
