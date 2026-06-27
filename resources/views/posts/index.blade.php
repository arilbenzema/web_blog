@extends('layouts.app')

@section('title' , 'Blog Posts')

@section('content')

<!-- LETAK CODE BOOTSTRAP BLOG DI SINI -->

<section class="bg-w py-5 mt-5">
  <div class="container">

    <!-- Header -->
    <div class="row mb-4">
      <div class="col-lg-12 text-center">
        <h2 class="display-5 fw-semibold text-dark">Blog Posts</h2>
        <p class="text-muted">Platform pembelajaran & pengaturcaraan.</p>
      </div>
    </div>

    <!-- Blog Grid -->
<div class="row g-4 border-top pt-4 mt-5">

  <!-- Card 1 -->
  <div class="col-12">

    <div class="card h-100 shadow-sm border-0 bg-light">

      <div class="card-body">

        <div class="d-flex align-items-center gap-2 small text-muted mb-2">
          <time>Mar 16, 2020</time>
          <span class="badge rounded-pill text-primary bg-primary-subtle">Marketing</span>
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
  <div class="col-12">

    <div class="card h-100 shadow-sm border-0 bg-light">

      <div class="card-body">

        <div class="d-flex align-items-center gap-2 small text-muted mb-2">
          <time>Mar 10, 2020</time>
          <span class="badge rounded-pill text-success bg-success-subtle">Sales</span>
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
  <div class="col-12">

    <div class="card h-100 shadow-sm border-0 bg-light">

      <div class="card-body">

        <div class="d-flex align-items-center gap-2 small text-muted mb-2">
          <time>Feb 12, 2020</time>
          <span class="badge rounded-pill text-info bg-info-subtle">Business</span>
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


@endsection
