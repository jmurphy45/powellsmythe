@component('mail::message')
{!! Html::image('https://drive.google.com/file/d/1yI1y4wkIi9DGGeWUycX_XKzAa991ORGN/view?usp=sharing') !!}
Name: {{ $data->name }}<br />
Email: {{ $data->email }}<br />
Phone: {{ $data->phone }}<br />
Company: {{ $data->company }}<br />
Message: {{ $data->message }}<br />
@endcomponent
