@component('mail::message')

<h2>Message: {{ $mail->mail }}</h2>
@component('mail::button', ['url' => ''])
Read More
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent