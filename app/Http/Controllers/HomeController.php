<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function class(){
        
        $classes = DB::table('clas')->paginate(3);
        return view('welcome')->with('classes',$classes);
    }

    public function reservation($id){
        $class = Clas::find($id);
        $limit = Reservation::all()->count(); // limit variable to limit number of possible reservations (not working)
        return view('reservation')->with('class',$class)->with('limit',$limit);
    
        }
    public function classreg(Request $request ,$id){

        $data = new Reservation();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->class = $request->class;

        $data->save();
        return redirect()->back();
    }
}

