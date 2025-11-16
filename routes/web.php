<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HelloController;

use Illuminate\Support\Facades\Route;
use function Termwind\renderUsing;


Route::get("/", [HomeController::class,"index"])->name("home");

Route::get("/hello", [HelloController::class,"welcome"])->name("hello");