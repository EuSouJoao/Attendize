Olá {{{$attendee->first_name}}},<br><br>

Os seus bilhetes encontram-se anexados neste e-mail.<br><br>

Pode consultar informações sobre o seu pedido e transferir bilhetes em {{route('showOrderDetails', ['order_reference' => $attendee->order->order_reference])}}.<br><br>

A referência do seu pedido é <b>{{$attendee->order->order_reference}}</b>.<br>

Obrigado!<br>

