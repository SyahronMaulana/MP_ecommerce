
@extends('navbar.main')

@section('konten')
@if (session()->has('berhasil'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('berhasil') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
</div>
@endif

<div class="container-fluid">
  <div class="px-2 py-1 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="/image/gambar4.png" alt="" width="1000" height="300">
    <h1 class="display-5 fw-bold">Markas Punakawan</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Markas Punakawan adalah website untuk memesan mahar dan seserahan sehingga memudahkan anda untuk memesannya</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="/store" class="badge-primary">Store</a>
      </div>
    </div>
  </div>
</div>
@endsection