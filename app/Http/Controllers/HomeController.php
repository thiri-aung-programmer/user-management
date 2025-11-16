<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index(){
    //    // return "index";

    //    //views ထဲမှာ ဖိုင်မရှိရင် အောက်ကစာပေါ်မှာ 
    //    if(!View::exists("home.index")){
    //     dump("View does not exist");
    //    }
    //    return View::make("home.index");
   
            return view('home.index')->with('name','Thiri')
            ->with('surname','Aung');
      }
}
