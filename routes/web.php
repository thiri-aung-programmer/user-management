<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //  return view('welcome'); //ဒါက သူ့ default ခေါ်တဲ့ဟာ
    // return "Creative Coder";
    // return ["key"=>"Creative Coder"]; ဆိုလိုတာက view file ကိုပဲ return ပြန်လို့ရတာမဟုတ်ဘူး ဘာကိုထည့်ထည့် သူကပြောင်းပေါ်ပေးမှာ
    return view('blogs');
});
