@component('mail::message')
# Introduction

Hi {{$maildata['user']['name']}}! Thank you for registering to our website.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
