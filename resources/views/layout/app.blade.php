@props(['title'=>''])


<x-baselayout :$title >

<x-layouts.header/>

{{$slot}}

  <footer>
   <a href="#">link 1></a>
   <a href="#">link 2></a>
   {{$footerlinks}}
  
    </footer>

</x-baselayout>

   








