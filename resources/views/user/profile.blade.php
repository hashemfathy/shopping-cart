@extends('layouts.master')
@section('title')
Profile
@endsection
@section('content')

<div class="signup">
    <div class="">
        <h1> User Profile</h1>
            <h2>My Orders</h2>
                @foreach($orders as $order)
                 <div class="panel panel-default">
                     <div class="panel-body">
                         <ul class="list-group">
                             @foreach($order->cart->items as $item)
                            <li class="list-group-item">
                                <span class="badge">$ {{ $item['price']}} </span>
                                {{ $item['item']['title'] }} | {{ $item['qty'] }} units
                            </li>
                            @endforeach
                        </ul>
                     </div>
                     <div class="panel-footer">
                         <strong>Total Price: ${{ $order->cart->totalPrice }}</strong>
                     </div>
                 </div>
                 @endforeach
    </div>
</div>
@endsection