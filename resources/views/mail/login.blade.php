@component('mail::message')
Bonjour,

Votre compte a été validé.  
Voici votre token unique pour vous connecter: {{ $mail->token }}
@component('mail::button', ['url' => ''])
Connexion
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent