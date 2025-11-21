
@props(['bodyClass'=>'','title'=>''])
<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
{{-- app မှာ ထည့်တဲ့ language ပေါ်မူတည်ပြီး ဒီမှာလာပေါ်မှာ တခါတလေလည်း es_ES အဲဒါမျိုးလည်း ဖြစ်နိုင်လို့ ထည့်စစ်ထားရတာ --}}
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- သူက တခြား third party ဝင်ာလာလို့မရအောင်ကာကွယ်တာ --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    {{-- bootstrap link --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{$title}} | {{ config('app.name' , 'Laravel') }}</title>
    {{-- config(app.name) က env file မှာ ပါတဲ့ ထိပ်ဆုံးက နာမည် အဲ့မှာ မပါရင် Default က Laravel ပေါ်မှာ --}}
</head>
<body @if($bodyClass)class="{{$bodyClass}}"@endif>
    {{-- @yield('childContent'); --}}
    {{ $slot }}
 </body>
</html>