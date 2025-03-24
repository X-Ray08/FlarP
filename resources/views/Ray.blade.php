<h1>Ray</h1>

<!-- PHP Comment which are visieble in sourse  -->
{{--Blade Comment which are not visible--}}

<!-- condition-->
$cars => 1;

@if ($cars ===0)
Hello
  <!-- if true that will happen-->  
  @elseif (true)

  <!-- Else-->
  @unless ($cars)
      
  @endunless
@endif

<!-- to check does variable exsist-->
@isset($a)
    <p>isset</p>
@endisset

<!-- is variable empty or not-->
@empty($a)
    <p> empty</p>
@endempty
<!-- is authorized?-->
@auth($a)
    
@endauth
<!-- is not authorized?-->
@guest($a)
    
@endguest


<!-- switch-->
@switch($country)
    @case(GE)
        Germany
        @break
        @case(US)
        USA
        @break
        @case(UK)
        United Kingdom
        @break

    @default
        unknown country
@endswitch

<!-- for-->
 
@for ($i=1,$i,$i>5)
  {{$i+1}}
     
 @endfor
<!-- for each-->
 @foreach ($cars as $car )
     <p>{{$car->$model}}</p>
 @endforeach

<!-- for else-->
 @forelse ($cars as $car )
 <p>{{$car->$model}}</p>
     
 @empty
 <p>no Cars Found!</p> 
 @endforelse

 <!-- while-->

 @while (false)
     
 @endwhile

 @foreach ([1,2,3,4,5] as $n)
  @if ($n==2)
  @continue
  @endif
     <p>{{$n}}</p>
 @endforeach

 @foreach ([1,2,3,4,5] as $n)
  @continue($n==2)
     <p>{{$n}}</p>
 @endforeach

 @foreach ([1,2,3,4,5] as $n)
 <p>{{$n}}</p>
 @break($n==2)
    
@endforeach

@foreach ([1,2,3,4,5] as $n)
<p>{{$n}}</p>
@if ($n==2)
@break
@endif
@endforeach
