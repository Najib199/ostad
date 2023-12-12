<div class="py-2 bg-light px-3">
  <ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link text-muted" aria-current="page" href="{{ route('home') }}"><i class="bx bx-home"></i> Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-muted @if(Request::route()->getName() == 'about') fw-bold @endif" href="{{ route('about') }}"><i class="bx bx-user"></i> <span> About Me</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-muted @if(Request::route()->getName() == 'projects') fw-bold @endif" href="{{ route('projects') }}"><i class="bx bx-book-content"></i> Projects</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-muted @if(Request::route()->getName() == 'contact') fw-bold @endif" href="{{ route('contact') }}"><i class="bx bx-envelope"></i> Contact</a>
    </li>
  </ul>
</div>