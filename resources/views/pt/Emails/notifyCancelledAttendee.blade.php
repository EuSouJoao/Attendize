@extends('en.Emails.Layouts.Master')

@section('message_content')

<p>Olá,</p>
<p>
    O seu bilhete para o evento <b>{{{$attendee->event->title}}}</b> foi cancelado.
</p>

<p>
    Pode contactar <b>{{{$attendee->event->organiser->name}}}</b> diretamente usando o e-mail <a href='mailto:{{{$attendee->event->organiser->email}}}'>{{{$attendee->event->organiser->email}}}</a> ou respondendo a este e-mail se precisar de informação adicional.
</p>
@stop

@section('footer')

@stop
