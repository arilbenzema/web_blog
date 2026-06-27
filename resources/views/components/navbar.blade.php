<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">
      <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" height="30">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('welcome') ? 'fw-bold' : '' }}" href="{{ route('welcome') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('about') ? 'fw-bold' : '' }}" href="{{ route('about') }}">About</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('marketplace') ? 'fw-bold' : '' }}" href="{{ route('marketplace') }}">Marketplace</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->routeIs('posts.index') ? 'fw-bold' : '' }}" href="{{ route('posts.index') }}">Blog Posts</a></li>
      </ul>

      <a href="#" class="btn btn-outline-dark btn-sm">Log in →</a>
    </div>
  </div>
</nav>
