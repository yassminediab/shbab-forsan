@component('mail::message')
    Name: {{ $data->name }}
    Phone: {{ $data->phone }}
    Time From: {{ $data->time_from }}
    Time To: {{ $data->time_to }}
    Date : {{ $data->date }}
@endcomponent
