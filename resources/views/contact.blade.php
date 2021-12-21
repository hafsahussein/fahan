
@if (Auth::user())
   @include('pages.adminContact') 
    @else
    @include('pages.userContact') 

   @endif

 