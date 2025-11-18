@extends('layouts.clean')
@section('childContent')
    {{-- header ပိုင်း --}}
    @include('layouts.partials.header');
    {{-- header ပိုင်း --}}
  
    {{-- main content  --}}
        @yield('content'); 


    {{-- main content  --}}

     {{-- footer အပိုင်း --}}
     @hasSection('footerLinks') 
     {{-- ဒါဆိုရင် footerLinks ပါမလာရင် ဒီနေရာ <footer></footer> ဆိုပြီး ပေါ်နေမှာမဟုတ်တော့ဘူး --}}
    <footer>
       @section('footerLinks')

            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            @show 
            {{-- @show က @endsection @yield('footerLinks') နဲ့တူ index မှာ @parent မပါရင် ဒီ1 နဲ့ 2 က ပေါ်မှာမဟုတ် --}}
       
    </footer>
    @endif
    {{-- footer အပိုင်း --}}

    
@endsection
   
   
</body>
</html>