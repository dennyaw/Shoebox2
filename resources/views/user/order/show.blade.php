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
    <h3 class="poppins">DETAIL ORDER</3>
    <h3 class="poppins"TOTAL : {{ $data->jumlah_harga }}</h3>
    <h3 class="poppins"TANGGAL : {{ $data->tanggal }}</h3>

    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>JUMLAH</th>
                <th>SIZE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data->detail as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->barang->nama_produk }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->size_produk }}</td>
                </tr>
            @endforeach
        </tbody>
        
    </table>



    <br>
        <br>
@endsection
