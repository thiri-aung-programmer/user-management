<div class="card">
    <div class="card-header">{{ $title }}</div> 
    {{  $slot  }}
    {{-- $slot က default တစ်ခုတည်းပါရင် ဒါသုံးလို့ရ --}}
    <div class="card-footer">{{ $footer }}</div>
</div>
{{-- title နဲ့ footer ကျ default မဟုတ်တော့ဘူး  --}}