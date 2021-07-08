
@extends('admin.layouts.dashboard')
@section('content')
<div class="container-fluid">
  <!-- table produk -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Member</h4>
          <div class="card-tools">
          </div>
        </div>
       <div class="card-body">
         
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>User ID</th>
                  <th>Email</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No. HP</th>
                  
                </tr>
               
              </thead>
              <tbody>
            
             
             @forelse ($user as $member)
                <tr>
               
                <td>
                  {{ $member->id }}
                  </td>
                  <td>
                  {{ $member->email }}
                  </td>
                  <td>
                  {{ $member->name }}
                  </td>
                  <td>
                  {{ $member->alamat }}
                  </td>
                  <td>
                  {{ $member->hp }}
                  </td>
                  @empty
                <h3>Tidak ada member untuk saat ini</h3>
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