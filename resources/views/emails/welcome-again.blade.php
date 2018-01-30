@component('mail::message')
# Introduction

The body of your message.

- one
- two

@component('mail::button', ['url' => 'http://windowsku.com'])
Ayo kesini
@endcomponent

@component('mail::panel', ['url' => ''])
The quick brown fox
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
