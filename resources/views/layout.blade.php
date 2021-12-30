<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  </head>
  <body class="bg-black text-white">
  <nav class="site-header sticky-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
          <a class="py-2 d-none d-md-inline-block" href="/">Home</a>
          <a class="py-2 d-none d-md-inline-block" href="/about">About</a>
          <a class="py-2 d-none d-md-inline-block" href="/review">Review</a>
          <a class="btn btn-outline-secondary" href="/email">Email</a>
    </div>
  </nav>
<div class="container">
  @yield('main_content')
</div>
  </body>
</html>
