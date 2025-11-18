<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use function Termwind\renderUsing;


Route::get("/", [HomeController::class,"index"])->name("home");
Route::get("/signup", [SignupController::class,"create"])->name("signup");
Route::get("/login", [LoginController::class,'create'])->name('login');

// Route::get("/hello", [HelloController::class,"welcome"])->name("hello");