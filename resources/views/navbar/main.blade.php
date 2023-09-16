{{-- css --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="/css/style.css">
{{-- end css --}}

  <div class="container-fluid">
    <header class="d-flex flex-wrap justify-content-center py-2 mb-0 border-bottom">
      <a href="/" class="navbar_brand d-flex align-items-center mb-0 mb-md-0 me-md-auto text-dark text-decoration-none">
      <img src="/image/gambar1.png" alt="" width="150" height="50">
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" class="nav-link {{ Request::is('/') ? 'active' :'' }}" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="/store" class="nav-link {{ Request::is('store') ? 'active' :'' }}">Store</a></li>
        <li class="nav-item"><a href="/dashboard" class="nav-link {{ Request::is('login') ? 'active' :'' }}">Login</a></li>
        <li class="nav-item"><a href="/registrasi" class="nav-link {{ Request::is('registrasi') ? 'active' :'' }}">Sign In</a></li>
      </ul>
    </header>
  </div>


    @yield('konten')
</div>