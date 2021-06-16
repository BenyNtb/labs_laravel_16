@component('mail::message')
# Introduction

{{-- The body of your message. --}}
Bienvenue dans Labs !
Votre e-mail : {{$mail->mail}}
Votre compte est validé! Vous pouvez dès à présent modifier votre profil.
Token pour vous connecter : /28021997


A bientôt, <br>
{{ config('app.name') }}
@endcomponent