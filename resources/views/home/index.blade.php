{{-- app layout ကို သုံးမှာလို့ပြောလိုက်တာ --}}
@extends('layouts.app')

{{-- title နေရာအတွက် data ထည့်တာ --}}
@section('title', " Home Page ");

{{-- content နေရာအတွက် data က များတော့ endsection ပါရမှာ --}}
@section('content')
{{-- <x-card>Card Content 1</x-card> --}}
{{-- <x-card color="red" bgColor="blue">  ဒီလိုမထည့်ဘဲ php နဲ့ variable ထဲထည့်လို့လည်းရ--}}
     @php
     $color="red";
     $bgColor="blue";
     @endphp
    
     {{-- <x-card color="$color" bgColor="$bgColor"></x-card>  --}}
     {{-- အဲ့လိုထည့်လည်းရသလို --}}
     <x-card :$color :$bgColor lang="en" class="card-rounded">

     {{-- အဲလိုလည်းရ --}}
     {{-- <x-slot name="title">Card Tile 1</x-slot> --}}
       <x-slot:title class="card-header-blue">Card Tile 1</x-slot>
     Card Content 1
     <x-slot name="footer">Card Footer 1</x-slot>
</x-card>
<x-admin.card />
<x-admin.button></x-button>
<x-admin.button/>
{{-- <x-search-form /> --}}
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
     {{-- <section class="find-a-car fw-bold p-3 bg-info-subtle"> This is a pg for finding a car</section> --}}
     <x-search-form />
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

