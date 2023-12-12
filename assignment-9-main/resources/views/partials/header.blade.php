<header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{ asset('/assets/img/me.png') }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="{{ route('home') }}">Abdur Rakib</a></h1>
        <div class="social-links mt-3 text-center">
          <a target="_blank" href="https://twitter.com/AbrakibCse" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a target="_blank" href="https://www.facebook.com/Abdur.cse.Rakib" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a target="_blank" href="https://www.instagram.com/abdur.cse.rakib/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a target="_blank" href="https://www.linkedin.com/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          <a target="_blank" href="https://github.com/AbRakib" class="linkedin"><i class="bx bxl-github"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="{{ route('home') }}" class="nav-link scrollto @if( Route::current()->getName() == 'home') active @endif"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="{{ route('about') }}" class="nav-link scrollto @if( Route::current()->getName() == 'about') active @endif"><i class="bx bx-user"></i> <span>About Me</span></a></li>
          <li><a href="{{ route('projects') }}" class="nav-link scrollto @if( Route::current()->getName() == 'projects') active @endif"><i class="bx bx-book-content"></i> <span>Projects</span></a></li>
          <li><a href="{{ route('contact') }}" class="nav-link scrollto @if( Route::current()->getName() == 'contact') active @endif"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header>