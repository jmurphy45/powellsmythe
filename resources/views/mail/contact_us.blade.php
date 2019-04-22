@component('mail::message')
Name: {{ $data->name }}<br />
email: {{ $data->email }}<br />
phone: {{ $data->phone }}<br />
company: {{ $data->company }}<br />
message: {{ $data->message }}<br />
@endcomponent
