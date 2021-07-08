@extends('user.master')

@section('css')
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
@endsection

    
@section('content')
    <div class="flex-column container">
    <h1 class="poppins">My Order</h1>
    @if (sizeof($data) == 0)
        <h3 class="poppins">BELUM ADA ORDER</h3>
    @endif
    </div>
    
    @if (sizeof($data) != 0)
    <table>
  <tr>
    <th>ID</th>
    <th>ID Produk</th>
    <th>Qty</th>
    <th>Size</th>
  </tr>
  @foreach ($data as $cart)
               
               
  <tr>
    <td>{{$cart->id}}</td>
    <td>{{$cart->produk_id}}</td>
    <td>{{$cart->jumlah}}</td>
    <td>{{$cart->size}}</td>
  </tr>
  @endforeach
</table>

    
    <div class="flex-column checkout-cart">
        <form action="{{ route('checkout') }}" method="post">
        @csrf
        <button type="submit" name="checkout">Checkout</button>
    </form>
        </div>
    @endif
    
   
    </div>
    <br><br>
@endsection
