    @props(['title'=>'','footerLinks'=>''])
<x-base-layout :$title>
    {{-- header ပိုင်း --}}
    {{-- @include('components.layouts.header'); --}}
    <x-layouts.header/>
    {{-- header ပိုင်း --}}
  
    {{-- main content  --}}
        {{-- @yield('content');  --}}
        {{ $slot }}


    {{-- main content  --}}

     {{-- footer အပိုင်း --}}
     {{-- @hasSection('footerLinks')  --}}
     {{-- ဒါဆိုရင် footerLinks ပါမလာရင် ဒီနေရာ <footer></footer> ဆိုပြီး ပေါ်နေမှာမဟုတ်တော့ဘူး --}}
    <footer>
       {{-- @section('footerLinks') --}}
          
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
             {{  $footerLinks }}
            {{-- @show  --}}
            {{-- @show က @endsection @yield('footerLinks') နဲ့တူ index မှာ @parent မပါရင် ဒီ1 နဲ့ 2 က ပေါ်မှာမဟုတ် --}}
       
    </footer>
    {{-- @endif --}}
    {{-- footer အပိုင်း --}}
</x-base-layout>