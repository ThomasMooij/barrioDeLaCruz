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
    public function classreg(Request $request ,$id){

        $data = Reservation::all();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->class = $request->class;

        $data->save();
        return redirect()->back();
    }
}

