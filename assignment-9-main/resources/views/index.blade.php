@include('partials.head')
  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  @include('partials.header')
  <!-- End Header -->

  @yield('content')

@include('partials.footer')