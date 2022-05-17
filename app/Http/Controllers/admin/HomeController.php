<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("/admin/index");
    }
    public function setting(){
    $data=setting::first();
    if($data==null){
        $data=new setting();
        $data->title='project titles';
        $data->save();
        $data=Setting::first();
    }
        return view("/admin/product/setting",['data'=>$data]);
    }
    public function settingupdate(Request $request)
    {

        $id = $request->input('id');
        $data = Setting::find($id);
        $data->title = $request->input('title');

        $data->description = $request->input('description');
        $data->company = $request->input('company');
        $data->adress = $request->input('adress');
        $data->phone = $request->input('phone');
        $data->fax = $request->input('fax');
        $data->email = $request->input('email');
        $data->smtpserver = $request->input('smtpserver');
        $data->smtpemail = $request->input('smtpemail');
        $data->smtppasword = $request->input('smtppasword');
        $data->smtpport = $request->input('smtpport');
        $data->smtpemail = $request->input('facebook');
        $data->smtpemail = $request->input('youtube');
        $data->smtpemail = $request->input('twitter');
        $data->smtpemail = $request->input('instagram');
        $data->abouts = $request->input('abouts');
        if($request->file('icon')){
            $data->icon=$request->file('icon')->store('image');
        }
        $data->contact = $request->input('contact');
        $data->references = $request->input('references');
        $data->stauts = $request->input('stauts');
        $data->save();

        return redirect()->route('admin.setting');







    }
        //$data=setting::first();
      //  if($data==null){
      //      $data=new setting();
      //      $data->title='project titles';
      //      $data->save();
      //      $data=setting::first();
       // }
       // return view("/admin/product/settingupdate",['data'=>$data]);
   // }

}
