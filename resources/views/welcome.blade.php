<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<!-- Navbar -->
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
        <li class="nav-item"><a class="nav-link" href="#">Product</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Marketplace</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Company</a></li>
      </ul>

      <a href="#" class="btn btn-outline-dark btn-sm">Log in →</a>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="bg-light text-center" style="padding-top:120px; padding-bottom:120px;">
  <div class="container">

    <div class="mb-4">
      <span class="badge bg-light text-dark border">
        Announcing our next round of funding.
        <a href="#" class="text-primary fw-semibold text-decoration-none">Read more →</a>
      </span>
    </div>

    <h1 class="display-4 fw-bold mb-4">
      Data to enrich your online business
    </h1>

    <p class="lead text-muted mb-5">
      Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.
      Elit sunt amet fugiat veniam occaecat.
    </p>

    <div class="d-flex justify-content-center gap-3">
      <a href="#" class="btn btn-primary btn-lg">
        Get started
      </a>

      <a href="#" class="btn btn-link fw-semibold text-dark text-decoration-none">
        Learn more →
      </a>
    </div>

  </div>
</section>

<!-- LETAK CODE BOOTSTRAP BLOG DI SINI -->

<section class="bg-w py-5">
  <div class="container">

    <!-- Header -->
    <div class="row mb-4">
      <div class="col-lg-6">
        <h2 class="display-5 fw-semibold text-dark">From the blog</h2>
        <p class="text-muted">Learn how to grow your business with our expert advice.</p>
      </div>
    </div>

    <!-- Blog Grid -->
<div class="row g-4 border-top pt-4 mt-5">

  <!-- Card 1 -->
  <div class="col-lg-4">

    <div class="card h-100 shadow-sm border-0 bg-light">

      <div class="card-body">

        <div class="d-flex align-items-center gap-2 small text-muted mb-2">
          <time>Mar 16, 2020</time>
          <span class="badge rounded-pill bg-light text-dark">Marketing</span>
        </div>

        <h5 class="fw-semibold">
          <a href="#" class="text-dark text-decoration-none">
            Boost your conversion rate
          </a>
        </h5>

        <p class="text-muted">
          Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo.
        </p>

      </div>

      <div class="card-footer bg-light border-0">

        <div class="d-flex align-items-center">
          <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?auto=format&fit=facearea&w=256&h=256&q=80"
               class="rounded-circle me-3"
               width="40">

          <div>
            <div class="fw-semibold">Michael Foster</div>
            <small class="text-muted">Co-Founder / CTO</small>
          </div>
        </div>

      </div>

    </div>

  </div>


  <!-- Card 2 -->
  <div class="col-lg-4">

    <div class="card h-100 shadow-sm border-0 bg-light">

      <div class="card-body">

        <div class="d-flex align-items-center gap-2 small text-muted mb-2">
          <time>Mar 10, 2020</time>
          <span class="badge rounded-pill bg-light text-dark">Sales</span>
        </div>

        <h5 class="fw-semibold">
          <a href="#" class="text-dark text-decoration-none">
            How to use search engine optimization to drive sales
          </a>
        </h5>

        <p class="text-muted">
          Optio cum necessitatibus dolor voluptatum provident commodi et.
        </p>

      </div>

      <div class="card-footer bg-light border-0">

        <div class="d-flex align-items-center">
          <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=facearea&w=256&h=256&q=80"
               class="rounded-circle me-3"
               width="40">

          <div>
            <div class="fw-semibold">Lindsay Walton</div>
            <small class="text-muted">Front-end Developer</small>
          </div>
        </div>

      </div>

    </div>

  </div>


  <!-- Card 3 -->
  <div class="col-lg-4">

    <div class="card h-100 shadow-sm border-0 bg-light">

      <div class="card-body">

        <div class="d-flex align-items-center gap-2 small text-muted mb-2">
          <time>Feb 12, 2020</time>
          <span class="badge rounded-pill bg-light text-dark">Business</span>
        </div>

        <h5 class="fw-semibold">
          <a href="#" class="text-dark text-decoration-none">
            Improve your customer experience
          </a>
        </h5>

        <p class="text-muted">
          Cupiditate maiores ullam eveniet adipisci in doloribus nulla minus.
        </p>

      </div>

      <div class="card-footer bg-light border-0">

        <div class="d-flex align-items-center">
          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&w=256&h=256&q=80"
               class="rounded-circle me-3"
               width="40">

          <div>
            <div class="fw-semibold">Tom Cook</div>
            <small class="text-muted">Director of Product</small>
          </div>
        </div>

      </div>

    </div>

  </div>

</div>
</section>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
