@component('mail::message')
Dear {{$maildata['appointment']['name']}},

Unfortunately, due to some problem, We have to request to reschedule our appointment in the {{date('d M, Y',strtotime($maildata['appointment']['booking_date']))}} on {{$maildata['appointment']['bookTime']['time']}}. If you agree with us, please visit your <a href="{{ route('appointments.index') }}">appointment page</a> .

Thanks,<br>
{{ config('app.name') }}
@endcomponent