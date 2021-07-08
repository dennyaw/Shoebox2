@extends('user.master')

@section('css')
    <style>
        td {
            border: 1px solid black;
            padding: 5px;
        }

    </style>
@endsection

    
@section('content')
<div class="flex-column shopping-cart">
            <h2 class="poppins">Shopping Cart</h2>
            <div class="flex-column list-item">
            @foreach ($data as $cart)
                <div class="flex-row item">
                    <div class="flex-row item-detail">
                        <div class="flex-row item-photo">
                            <img src="img/photo/product-1.png" alt="product-1">
                        </div>
                        <div class="flex-column item-description">
                            <div class="flex-column poppins item-group-text">
                                <h3></h3>
                                <h4>{{ $cart->harga }}</h4>
                            </div>
                            <div class="flex-column poppins item-group-text">
                                <h4>Size: {{ $cart->size }}</h4>
                                <h4>Qty: {{ $cart->jumlah }}</h4>
                                <h4>{{ $cart->jumlah_harga }}</h4>
                            </div>
                        </div>
                    </div>
                   
                </div>
            @endforeach
            </div>
        </div>
        <div class="flex-column checkout-cart">
        <form action="{{ route('checkout') }}" method="post">
        @csrf
        <button type="submit" name="checkout">Checkout</button>
    </form>
        </div>
<br>
@endsection
