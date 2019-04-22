@component('mail::message')
Name: {{ $data->name }}<br />
Email: {{ $data->email }}<br />
Phone: {{ $data->phone }}<br />
Company: {{ $data->company }}<br />
Message: {{ $data->message }}<br />
@endcomponent
