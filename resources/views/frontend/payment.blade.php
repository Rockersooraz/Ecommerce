@extends('layout.secondary-navigation')
@section('items')
<center>
<h3>Click below to make your Payment  with paypal</h3>

<a href="{{route('payment.paypal')}}">

<img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0" alt="PayPal Logo">
</a>
</center>
@endsection

