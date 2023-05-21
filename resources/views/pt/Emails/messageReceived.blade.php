@extends('en.Emails.Layouts.Master')

@section('message_content')

<p>Olá,</p>
<p>Recebeu uma mensagem de <b>{{ (isset($sender_name) ? $sender_name : $event->organiser->name) }}</b> relativamente ao evento <b>{{ $event->title }}</b>.</p>
<p style="padding: 10px; margin:10px; border: 1px solid #f3f3f3;">
    {!! nl2br($message_content) !!}
</p>

<p>
    Pode contactar <b>{{ (isset($sender_name) ? $sender_name : $event->organiser->name) }}</b> diretamente usando o e-mail <a href='mailto:{{ (isset($sender_email) ? $sender_email : $event->organiser->email) }}'>{{ (isset($sender_email) ? $sender_email : $event->organiser->email) }}</a>, ou respondendo a este e-mail.
</p>
@stop

@section('footer')


@stop
