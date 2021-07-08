@extends('admin.layouts.dashboard')
@section('content')
<div class="container-fluid">
  <!-- table transaksi -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Transaksi</h4>
        </div>
       <div class="card-body">
         
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID Transaksi</th>
                  <th>User ID</th>
                  <th>Tanggal</th>
                </tr>
               
              </thead>
              <tbody>
              @foreach($pesan as $pesan)
                <tr>
                
                  <td>
                  {{ $pesan->id }}
                  </td>
                  <td>
                  {{ $pesan->user_id }}
                  </td>
                  <td>
                  {{ $pesan->tanggal }}
                  </td>
                
                  
                
                </tr>
                @endforeach
              </tbody>
            </table>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection