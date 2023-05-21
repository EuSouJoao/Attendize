@extends('en.Emails.Layouts.Master')

@section('message_content')

<p>Olá {{$first_name}}</p>
<p>
    Obrigado por se registar no {{ config('attendize.app_name') }}. Estamos gratos por tê-lo connosco.
</p>

<p>
    Pode criar o seu primeiro Evento e confirmar o seu e-mail usando o link abaixo.
</p>

<div style="padding: 5px; border: 1px solid #ccc;">
   {{route('confirmEmail', ['confirmation_code' => $confirmation_code])}}
</div>
<br><br>
<p>
    Se tiver dúvidas, feedback ou sugestões sinta-se à vontade para responder a este e-mail.
</p>
<p>
    Obrigado
</p>

@stop

@section('footer')


@stop
