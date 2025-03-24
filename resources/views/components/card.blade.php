{{-- {{$color}} --}}
@props(['color'=>'green', 'bgcolor'=>'white'])


{{-- {{ dump($attributes)}} --}}
<div {{$attributes
->merge([ 'lang'=>"AR" ])
->class("card card-text-$color card-bg-$bgcolor") }}>
    <div {{$title->attributes->class('card-header')}}>
       <h3>{{ $title }}</h3> 
    </div>
    @if ($slot->isEmpty())
       <p>please provide content</p> 
    @else
{{ $slot }}
@endif
<div class="card-footer">
    {{ $footer }}
</div>
</div>