@extends('admin.layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Produk</h3>
          <div class="card-tools">
            <a href="{{ route('produk.index') }}" class="btn btn-sm btn-danger">
              Tutup
            </a>
          </div>
        </div>
        <div class="card-body">
          @if(count($errors) > 0)
          @foreach($errors->all() as $error)
              <div class="alert alert-warning">{{ $error }}</div>
          @endforeach
          @endif
          @if ($message = Session::get('error'))
              <div class="alert alert-warning">
                  <p>{{ $message }}</p>
              </div>
          @endif
          @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
          @endif
          <form action="{{ route('produk.update', $itemproduk->id) }}" method="post">
          {{ method_field('patch') }}
            @csrf

            

            <div class="form-group">
              <label for="nama_produk">Nama Produk</label>
              <input type="text" name="nama_produk" id="nama_produk" value="{{ $itemproduk->nama_produk }}" class="form-control">
            </div>

            <div class="form-group">
              <label for="kategori">Kategori Produk</label><br>
              <select name="kategori_produk" id="kategori_produk">
              <option value="" selected disabled>----- Kategori Produk -----</option>
                    <option value="Men Sneakers">Men Sneakers</option>
                    <option value="Men Boots">Men Boots</option>
                    <option value="Men Sandals">Men Sandals</option>
                    <option value="Women Flats">Women Flats</option>
                    <option value="Women Heels">Women Heels</option>
                    <option value="Women Slip On">Women Slip On</option>
                </select>
            </div>

            <div class="form-group">
              <label for="deskripsi_produk">Deskripsi</label>
              <textarea name="deskripsi_produk" id="deskripsi_produk" cols="30" rows="5" value="{{ $itemproduk->deskripsi_produk }}" class="form-control"></textarea>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="qty">Qty</label>
                  <input type="text" name="qty" id="qty" value={{ $itemproduk->qty }} class="form-control">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="harga">Harga</label>
              <input type="text" name="harga" id="harga" value={{ $itemproduk->harga }} class="form-control">
            </div>

            <div class="form-group">
              <label for="size_produk">Size</label><br>
                <input type="checkbox" name="size_produk[]" value="36"> 36
                <input type="checkbox" name="size_produk[]" value="37"> 37
                <input type="checkbox" name="size_produk[]" value="38"> 38
                <input type="checkbox" name="size_produk[]" value="39"> 39
                <input type="checkbox" name="size_produk[]" value="40"> 40
                <input type="checkbox" name="size_produk[]" value="41"> 41
                <input type="checkbox" name="size_produk[]" value="42"> 42
                <input type="checkbox" name="size_produk[]" value="43"> 43
            </div>  

          

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Update</button>
              <button type="reset" class="btn btn-warning">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection