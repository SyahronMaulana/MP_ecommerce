
@extends('navbar.main')

@section('konten')
@if (session()->has('berhasil'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('berhasil') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
</div>
@endif


  {{-- card --}}
  <div class="container-fluid mx-5 my-3">
    <div class="row">
      <h2 class="fw-bold text-center">STORE</h2>
      @foreach ($stores as $store)
        <div class="col-md-4 my-5">
          <div class="card" style="width: 18rem;">
            @if ($store->image)
              <img src="{{ asset('storage/' . $store->image) }}" class="card-img-top" alt="...">
                
            @else
            <img src="https://source.unsplash.com/1200x500?{{ $store->category->name }}" class="card-img-top" alt="...">
                
            @endif
            <div class="card-body">
              <h5 class="card-title">{{ $store->name }}</h5>
              <p class="card-text">{{ $store->category->name }} In {{ $store->created_at->diffForHumans() }}</p>
              <p class="fs-4 fw-bold">{{ $store->harga }}</p>
              <a href="/store/buy/{{ $store->slug }}" class="btn btn-primary">Desc</a>
            </div>
          </div>
        </div>
        @endforeach
    </div>
  </div>
</div>
{{-- end card --}}

@endsection