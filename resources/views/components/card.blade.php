      {{-- {{ $color }} --}}
      @props(['color','bgColor'=>'white'])
{{-- <div class="card" color={{ $color }} bgColor={{ $bgColor }}> --}}
    {{-- {{ dump($attributes) }} --}}
    {{-- ဟိုဘက်မှာ class="card-rounded"ဆိုတာလိုမျိုးအသစ်ထပ်ထည့်တဲ့အခါ မူလ class ထဲကိုပဲပေါင်းပေးအောင်  --}}
    {{-- <div class="card card-text{{ $color }} card-bg-{{ $bgColor }}"> --}}
    <div {{ $attributes
                ->merge(['lang'=>'ka'])
                ->class("card card-text-$color card-bg-$bgColor") }} >
        {{-- ဒါဆိုရင် အသစ်ဝင်လာတာက class ဆို class ထဲဝင် ကျန်တာက သီးသန့်ဝင် 
        ဒီထဲမှာ တခြားဟာ ဥပမာ အပေါ်ကလို lang တို့လိုဟာ ထည့်ထားချင်ရင် merge နဲ့ထည့် default က မပါလည်းရ --}}
  
    {{-- <div class="card-header">{{ $title }}</div>  --}}
    <div {{ $attributes->class("card-header") }}>{{ $title }}</div> 
    {{-- {{ dump($title->attributes) }} --}}
    {{-- တကယ်လို့ slot မရှိရင် ဆိုတာမျိုးအတွက် စစ်ထားလို့ရ --}}
    @if($slot->isEmpty())
        <p>Please Provide some content</p>
    |@else
        {{  $slot  }}
    @endif
    {{-- $slot က default တစ်ခုတည်းပါရင် ဒါသုံးလို့ရ --}}
    <div class="card-footer">{{ $footer }}</div>
</div>
{{-- title နဲ့ footer ကျ default မဟုတ်တော့ဘူး  --}}