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
            ->with('surname','Aung')
            ->with('job','<b>Developer</b>')
            // ဒီထဲမှာ <b> tag ( html tags )တွေကို ထည့်ပြီး ဟိုဘက်မှာ {{}} နဲ့ထုတ်ရင် အလုပ်မလုပ်ဘူး {!! !!} အဲ့လိုထုတ်မှထွက်မှာ
            ->with('hobbies',['Tennis','Fishing'])
            ->with('cars',[])
            ->with('country','ge');
      }
}
