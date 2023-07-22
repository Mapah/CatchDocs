@component('mail::message')
<h1>Hello </h1>
@if ($type == 'problem')
<p>Un problème a été enregistré sur votre plateforme, merci de bien vouloir vous occuper de ce problème</p>
@endif

@if ($type == 'suggestion')
<p>Une Suggestion a été enregistrée sur votre plateforme, merci de bien vouloir répondre à cette Suggestion</p>
@endif


{{-- <p>The allowed duration of the code is 60 minutes from the time the message was sent</p> --}}

Merci,<br>
{{ config('app.name') }}
@endcomponent
