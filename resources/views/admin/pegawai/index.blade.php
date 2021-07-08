@extends('admin.layouts.dashboard')
@section('content')
<div class="container-fluid">
  <!-- table produk -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Pegawai</h4>
          <div class="card-tools">
            <a href="{{ route('produk.create') }}" class="btn btn-sm btn-primary">
              Baru
            </a>
          </div>
        </div>
       <div class="card-body">
         
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Email</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No. HP</th>

                </tr>
               
              </thead>
              <tbody>
                
              @forelse ($user as $admin)
                <tr>
                
                  
                  <td>
                  {{ $admin->email }}
                  </td>
                  <td>
                  {{ $admin->name }}
                  </td>
                  <td>
                  {{ $admin->alamat }}
                  </td>
                  <td>
                  {{ $admin->hp }}
                  </td>
                  
                  
                  @empty
                <h3>Tidak ada pegawai untuk saat ini</h3>
                @endforelse
                </tr>
              </tbody>
            </table>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection