@extends('en.Emails.Layouts.Master')

@section('message_content')

<p>Olá</p>
<p>
    Você foi associado a uma conta {{ config('attendize.app_name') }} por {{$inviter->first_name.' '.$inviter->last_name}}.
</p>

<p>
    Pode fazer login com os seguintes detalhes.<br><br>
    
    Username: <b>{{$user->email}}</b> <br>
    Password: <b>{{$temp_password}}</b>
</p>

<p>
    Deve mudar a sua password temporária quando se autenticar pela primeira vez.
</p>

<div style="padding: 5px; border: 1px solid #ccc;" >
   {{route('login')}}
</div>
<br><br>
<p>
    Se tiver alguma questão responda a este e-mail.
</p>
<p>
    Obrigado
</p>

@stop

@section('footer')


@stop
