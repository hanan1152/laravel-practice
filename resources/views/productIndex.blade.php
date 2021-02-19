@extends('layout')
@section('content')
<div class="container">
     @foreach($orders as $order)
    <ul class="list-group p-2">
    name:- <li class="list-group-item"> {{$order->name}}</li></br>
    email:-   <li class="list-group-item">{{$order->email}}</li></br>
    product:-  <li class="list-group-item"> {{$order->product}}</li></br>
    Message:-   <li class="list-group-item">{{$order->message}}</li></br>
     </ul>

     @endforeach
</div>
@endsection