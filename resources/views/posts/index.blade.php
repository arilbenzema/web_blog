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

    @foreach ($posts as $post)

  <!-- Card 1 -->
  <div class="col-12">

    <div class="card h-100 shadow-sm border-0 bg-light">

      <div class="card-body">

        <div class="d-flex align-items-center gap-2 small text-muted mb-2">
          <time>{{ \Carbon\Carbon::parse($post['created_at'])->format('j M Y') }}</time>
          <span class="badge rounded-pill text-primary bg-primary-subtle">{{ $post['category'] }}</span>
        </div>

        <h5 class="fw-semibold">
          <a href="#" class="text-dark text-decoration-none">
            {{ $post['title'] }}
          </a>
        </h5>

        <p class="text-muted">
          {{ $post['content'] }}
        </p>

      </div>

      <div class="card-footer bg-light border-0">

        <div class="d-flex align-items-center">
          <img src="{{ $post['image'] }}"
               class="rounded-circle me-3" width="40">

          <div>
            <div class="fw-semibold">{{ $post['author'] }}</div>
            <small class="text-muted">{{ $post['author_info'] }}</small>
          </div>
        </div>

      </div>

    </div>

  </div>
  @endforeach

</div>

</section>


@endsection
