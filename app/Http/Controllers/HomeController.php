<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function class(){
        
        $classes = DB::table('clas')->paginate(3);
        return view('welcome')->with('classes',$classes);
    }
}
