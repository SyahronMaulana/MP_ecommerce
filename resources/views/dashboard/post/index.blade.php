@extends('dashboard.layout.main')

@section('container')
<div class="row">
    <div class="col-lg-10">
        <h2 class="my-4">All Sales</h2>
        <a href="/dashboard/create" class="badge btn-primary"><span data-feather="plus-circle"></span>Tambah</a>
        <div class="table-responsive">
<table table class="table table-striped table-sm">
<thead>
  <tr>
    <th scope="col">No</th>
    <th scope="col">Name</th>
    <th scope="col">Harga</th>
    <th scope="col">Action</th>
  </tr>
</thead>
<tbody>
    @foreach ($penjualan as $p)    
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $p->name }}</td>
      <td>{{ $p->harga }}</td>
      <td>
        <a href="/dashboard/update/{{ $p->slug }}" class="badge bg-warning"><span data-feather="edit"></span></a>
        <form action="/dashboard/delete/{{ $p->slug }}" method="POST" class="d-inline">
          @method('delete')
        @csrf
        <button class="badge bg-danger border-0"><span data-feather="trash"></button>
        </form>
      </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
    </div>
</div>

@endsection