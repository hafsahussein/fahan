@component('mail::message')

# A Message from Fahan 
<strong>Name:</strong>{{$data['name']}}<br/>
<strong>Email:</strong>{{$data['email']}}<br/>
<strong>Message:</strong><br/>
{{$data['message']}}

@endcomponent
