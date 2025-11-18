{{-- app layout ကို သုံးမှာလို့ပြောလိုက်တာ --}}
@extends('layouts.app')

{{-- title နေရာအတွက် data ထည့်တာ --}}
@section('title', " Home Page ");

{{-- content နေရာအတွက် data က များတော့ endsection ပါရမှာ --}}
@section('content')
<h1>Here is for the content data</h1>
<div class="homeslider">
     Lorem ipsum dolor sit amet consectetur adipisicing elit. 
     Doloribus, harum ipsum? Expedita, sapiente maxime? Beatae, nulla tempore numquam 
     impedit minima totam unde modi ratione voluptates porro vero sequi voluptas nemo!
     Lorem ipsum dolor sit amet consectetur adipisicing elit. 
     Doloribus, harum ipsum? Expedita, sapiente maxime? Beatae, nulla tempore numquam 
     impedit minima totam unde modi ratione voluptates porro vero sequi voluptas nemo!
     Lorem ipsum dolor sit amet consectetur adipisicing elit. 
     Doloribus, harum ipsum? Expedita, sapiente maxime? Beatae, nulla tempore numquam 
     impedit minima totam unde modi ratione voluptates porro vero sequi voluptas nemo!
<main>
     {{-- Find a car form --}}
     <section class="find-a-car fw-bold p-3 bg-info-subtle"> This is a pg for finding a car</section>
     {{-- Find a car form --}}
     {{-- New Car --}}
     <section class="fw-bold p-3 bg-success-subtle"> This is New car</section>
     {{-- New Car --}}
</main>
</div>
@endsection

{{-- footer အတွက် --}}
@section('footerLinks')
     @parent
     <a href="#">Link 3</a>
     <a href="#">Link 4</a>
@endsection

