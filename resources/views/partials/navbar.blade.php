<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css"/>
    <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <title>Fisioyuk | {{ $title }}</title>
    <link rel="icon" href="assets/img/Logo/logo.png">
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-md bg-white fixed-top shadow shadow-sm">
      <div class="container">
      <a href="" class="navbar-brand"><img src="assets/img/Logo/logo persegi panjang 4.png" class="img-fluid"></a>
      <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#btn">
        <i class="fa-solid fa-ellipsis-vertical"></i>
      </button>
      <div class="collapse navbar-collapse ul-bg" id="btn">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="/" class="nav-link mx-1 fw-bold {{ ($title === "Home") ? 'active' : '' }}">Home</a>
          </li>
          <li class="nav-item">
            <a href="/about" class="nav-link mx-1 fw-bold {{ ($title === "About") ? 'active' : '' }}">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a href="/service" class="nav-link mx-1 fw-bold {{ ($title === "Service") ? 'active' : '' }}">Layanan</a>
          </li>
          <li class="nav-item">
            <a href="/lokasi" class="nav-link mx-1 fw-bold {{ ($title === "Lokasi") ? 'active' : '' }}">Lokasi</a>
          </li>
          <li class="nav-item">
            <a href="informasi" class="nav-link mx-1 fw-bold {{ ($title === "Informasi") ? 'active' : '' }}">Informasi</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-user"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/login">Login as admin</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    </nav>
    <!-- NAVBAR END -->