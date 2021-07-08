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
<h1 class="poppins">My Order</h1>
    @if (sizeof($data) == 0)
       <h2 class="poppins">Coming Soon</h2>
    @endif
    @foreach ($data as $item)
        <ul>
            <li>{{ $loop->iteration }}</li>
            <li>{{ $item->tanggal }}</li>
            <li> <a href="{{ route('order.detail', $item->id) }}">Show Details</a></li>
        </ul>
        <hr>
    @endforeach
@endsection

