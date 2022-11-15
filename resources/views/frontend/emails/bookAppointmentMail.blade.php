@component('mail::message')

We're happy to have you on board. Our team will be in touch with you soon!

Your Booking date is {{date('d M, Y',strtotime($maildata['appointment']['booking_date']))}} & booking time is {{$maildata['appointment']['bookTime']['time']}}.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
