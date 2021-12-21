
@if (Auth::user())
@include('pages.adminIndex') 
 @else
 @include('pages.userIndex') 

@endif

