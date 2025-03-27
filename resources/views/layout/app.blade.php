@props(['title'=>'' , 'footerlinks'=>''])
<x-baselayout :$title >
<x-layouts.header/> 
  {{ $slot }}
</x-baselayout>

   








