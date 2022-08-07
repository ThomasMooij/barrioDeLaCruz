<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use App\Models\old_reservations;
use App\Models\Reservation;
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

    public function classShow($id){
        $class=Clas::find($id);
        return view("classShow")->with('class',$class);
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
    
    public function deletereserve($id){
        $reserve=Reservation::find($id);
        $reserve->delete();
        return redirect()->back();
    }
    public function deletereserveall(){
        DB::table('reservations')->delete();;
        return redirect()->back();
    }

    public function update(Request $request , $id){
        $data = Clas::find($id);

        $image= $request->image;
        $imagename = time(). '.' .$image->getClientOriginalExtension(); //create nickname for image (OriginalName better?)
        $request->image->move('classimages' , $imagename); // save image in classimages folder

        $data->image= $imagename;
        $data->title= $request->title;
        $data->price= $request->price;
        $data->description= $request->description;
        $data->descriptionshow= $request->descriptionshow;
        $data->timetable= $request->description;
        $data->save();
        return redirect()->back();
    }

    
    public function updateview($id){
        $class=Clas::find($id);
        return view('updateclass')->with('class', $class);
        
    }

    public function adminReserve(){
        $reserve=Reservation::all();
        $old_reserve=old_reservations::all();
        return view("adminReserve")->with('reserve' , $reserve)->with('old_reserve',$old_reserve);
        }


    public function upload(Request $request){
        $data = new Clas();
        $image= $request->image;
        $imagename = time(). '.' .$image->getClientOriginalExtension(); //create nickname for image (OriginalName better?)
        $request->image->move('classimages' , $imagename); // save image in classimages folder

        $data->image= $imagename;
        $data->title= $request->title;
        $data->price= $request->price;
        $data->timetable= $request->timetable;
        $data->descriptionshow= $request->descriptionshow;
        $data->description= $request->description;

        $data->save();
        return redirect()->back();

    }

}
