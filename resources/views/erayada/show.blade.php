
@if (Auth::user())
@include('pages.adminShow') 
 @else
 @include('pages.userShow') 

@endif

