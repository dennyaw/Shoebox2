@extends('admin.layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <!-- table produk baru -->
        <h1 class="m-0 text-dark"> Hello, {{Auth::user()->name}}</h1>
    </div>
@endsection
