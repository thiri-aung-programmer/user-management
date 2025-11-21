<x-app-layout title="Home Page">

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
<x-test-component class="card">
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum pariatur minima corrupti, at blanditiis necessitatibus corporis voluptas nihil a ducimus molestiae eveniet placeat nesciunt vitae aliquam beatae voluptatibus obcaecati veniam.

</x-test-component>
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
     {{-- Car list --}}
     <h2>This is Car Lists</h2>
     <div class="car-lists row">
          @for($i=0;$i<15;$i++)
               <x-car-item/>
          @endfor

     </div>
</main>
</div>

{{-- footer အတွက် --}}
<x-slot:footerLinks>
     <a href="#">Link 3</a>
     <a href="#">Link 4</a>
</x-slot:footerLinks>
{{-- @section('footerLinks')
     @parent
     
@endsection --}}

</x-app-layout>


