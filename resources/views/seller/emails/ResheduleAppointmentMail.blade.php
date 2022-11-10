@component('mail::message')
Dear {{$maildata['appointment']['name']}},

Unfortunately, due to some problem, I have to request to reschedule our appointment in the {{$maildata['appointment']['bookTime']['time']}} of {{date('d M, Y',strtotime($maildata['appointment']['booking_date']))}}. If you agree with us, please click on accept button.
@if($maildata['appointment']['status'] == 'reshedule')
<div style="display:flex; justify-content:center;">
@component('mail::button', [
                    'url' => route('booking.accepted', ['id'=>base64_encode($maildata['appointment']['id'])]),
                    'color' => 'green'
                ])
                Accept
@endcomponent
<div style="float: left;">
@component('mail::button', [
                    'url' => route('booking.rejected', ['id'=>base64_encode($maildata['appointment']['id'])]),
                    'color' => 'red'
                ])
                Rejected
@endcomponent
</div>

</div>

@else
<p>{{$maildata['appointment']['status']}}!!</p>
@endif
Thanks,<br>
{{ config('app.name') }}
@endcomponent