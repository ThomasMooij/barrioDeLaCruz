<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){

    return view('auth.login');

    }

    public function index(){

        $usertype = Auth::user()->usertype;
       
        if($usertype != 1){
            return view('welcome');
        } else {
        return view ('adminPanel');
    }
    }

    public function classShow(){
        return view("classShow");
    }

    public function classCreate(){
        $classes = Clas::all();
        return view("classCreate")->with('classes',$classes);
    }

    public function deleteclass($id){
        $class=Clas::find($id);
        $class->delete();
        return redirect()->back();
    }
    
    public function updateclass($id){
        $class=Clas::find($id);
        return view('updateclass')->with('class', $class);
        
    }

    public function upload(Request $request){
        $data = new Clas();

        $image= $request->image;
        $imagename = time(). '.' .$image->getClientOriginalExtension(); //create nickname for image (OriginalName better?)
        $request->image->move('classimages' , $imagename); // save image in classimages folder

        $data->image= $imagename;
        $data->title= $request->title;
        $data->price= $request->price;
        $data->description= $request->description;

        $data->save();
        return redirect()->back();

    }
}
