@component('mail::message')
<h2 style="color:green">Subject: {{ $mail->subject }} </h2>
<h2>Email: {{$mail->mail}}</h2>
<h2>Message: {{ $mail->message }}</h2>
@component('mail::button', ['url' => ''])
Read More
@endcomponent

Thanks,<br>
{{ config('app.name') }}
{{$mail->name}}
@endcomponent
