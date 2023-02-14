@extends('layout.sidebar')
@section('content')
<div class="container py-3 h-100">
  <div class="row d-flex justify-content-center align-items-center h-100">
  <div class="col-12 col-md-8 col-lg-6 col-xl-5">
    <h3>Halaman Tambah Produk</h3>
    <div class="card shadow-2-strong mt-4 bg-secondary"   style="border-radius: 1rem;">
    <div class="card-body p-5 ">
                    <form action="/update/{{ $data->idProduk }}" method="POST" enctype="multipart/form-data">
                     @csrf
         <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">ID Produk</label>
          <input type="number" name="idProduk" value="{{$data->idProduk}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         </div>
         <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Judul Produk</label>
          <input type="text" name="judulProduk" value="{{$data->judulProduk}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Deskripsi Produk</label>
          <input type="text" name="deskripsi" value="{{ $data->deskripsi }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Harga Produk</label>
          <input type="number" name="harga" value="{{ $data->harga }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Gambar Produk</label>
          <input type="file" name="gambar"class="form-control" placeholder="Post Title">
      <button type="submit" class="mt-4 btn btn-light w-25">Submit</button>
    </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
@endsection