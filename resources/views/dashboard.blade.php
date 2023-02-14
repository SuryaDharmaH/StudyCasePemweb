@extends('layout.sidebar')
@section('content')
    <div class="container mt-5">
      <h5>Halaman Kelola Data Produk</h5>
      <a href="/tambah" class="btn btn-light btn-lg border">Tambah</a>
    <table class="table table-responsive table-striped border mt-4">
        <thead>
          <tr class="text-center">
            <th scope="col">No</th>
            <th scope="col">ID Produk</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Harga</th>
            <th scope="col">Gambar</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach($data as $tables => $table)
            <tr class="text-center">
              <th scope="row">{{++$tables}}</th>
              <td>{{$table->idProduk}}</td>
              <td>{{$table->judulProduk}}</td>
              <td>{{$table->deskripsi}}</td>
              <td>{{$table->harga}}</td>
              <td><img src="{{ asset('foto/'.$table->gambar) }}" width="50px"></td>
              <td>
                <a href="/edit/{{ $table->idProduk }}" class="btn btn-dark">Edit</a>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus">Hapus</button>
              </td>
            </tr>


            <div class="modal fade" id="hapus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content bg-secondary" style="padding: 20%; height: 300px; margin-top: 30%; width: 520px">
                  <div class="modal-body">
                   <h5> Produk Berhasil Di Hapus (kembali Ke Halaman Produk)</h5>
                  </div>
                    <a href="/hapus/{{ $table->idProduk }}" style="margin-left: 20%" class="btn btn-light w-50 mt-4 ">Ok</a>
                </div>
              </div>
            </div>
          @endforeach
        </tbody>
      </table>
    </div>
    @endsection