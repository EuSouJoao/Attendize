@extends('en.Emails.Layouts.Master')

@section('message_content')
    <div>
        Olá,<br><br>
        Para repor a sua password, complete o seguinte formulário: {{ route('password.reset', ['token' => $token]) }}.
        <br><br><br>
        Obrigado,<br>
        Equipa Attendize
    </div>
@stop