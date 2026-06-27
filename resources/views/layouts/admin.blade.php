<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog</title>

    <!-- Bootstrap CSS -->
    <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome (WAJIB untuk icon) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body class="d-flex flex-column min-vh-100">

<!-- Header -->
<x-navbar />

<!-- Main Content -->
<main class="flex-fill">
    @yield('content')
</main>

  <!-- Footer -->
  <x-footer />


