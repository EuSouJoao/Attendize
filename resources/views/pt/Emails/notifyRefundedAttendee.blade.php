@extends('en.Emails.Layouts.Master')

@section('message_content')

    <p>Olá,</p>
    <p>
        Recebeu uma devolução pelo cancelamento do seu bilhete para <b>{{{$attendee->event->title}}}</b>.
        <b>{{{ $refund_amount }}} foram devolvidos ao titular de pagamento, que deverá aparecer nas sua conta no espaço de alguns dias.</b>
    </p>

    <p>
        Pode contactar <b>{{{ $attendee->event->organiser->name }}}</b> diretamente usando o e-mail <a href='mailto:{{{$attendee->event->organiser->email}}}'>{{{$attendee->event->organiser->email}}}</a> ou respondendo a este e-mail se necessitar de informação adicional.
    </p>
@stop

@section('footer')

@stop