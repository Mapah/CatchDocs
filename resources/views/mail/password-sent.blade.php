@component('mail::message')
<h1>Bienvenue sur GBFS {{date('Y')}}, Mr/Mrs {{$name}} </h1>
<p>Nous avons créé votre compte sur la plateforme {{ config('app.name') }}. Vous pouvez utiliser votre adresse e-mail et le mot de passe suivant pour accéder à votre compte:</p>

@component('mail::panel')
{{ $password }}
@endcomponent

{{-- <p>The allowed duration of the code is 60 minutes from the time the message was sent</p> --}}

Merci,<br>
{{ config('app.name') }}
@endcomponent
