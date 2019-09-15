@component('mail::message')
# Introduction
{{$token}}
The body of your message.

@component('mail::button', ['url' => 'http://localhost:3000/reference/confirmation/' . $email . '/' . $token])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
