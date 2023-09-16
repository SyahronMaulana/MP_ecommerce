<ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard') ? 'active' :'' }}" aria-current="page" href="/dashboard">
        <span data-feather="home"></span>
        Dashboard
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard/post') ? 'active' :'' }}" href="/dashboard/post">
        <span data-feather="file"></span>
        Produk
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/">
        <span data-feather="home"></span>
        Back To Home
      </a>
    </li>
  </ul>