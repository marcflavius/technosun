@component('mail::message')
# De

{{$request->input('name')}}
# Sujet

{{$request->input('subject')}}
# Contenu

{{$request->input('message')}}


{{ config('app.name') }}
@endcomponent
