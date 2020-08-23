<nav class="navbar navbar-bottom navbar-expand-md navbar-light">
    <div class="container">
        <a class="navbar-brand green-text" href="{{ url('/') }}">
            {{ config('app.name', 'Pinewood') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Right Side Of Navbar -->
          <ul class="nav-main navbar-nav ml-auto">
            <li class="nav-item"><a  class="nav-link hvr-underline-from-center" href="">Home</a></li>
            <li class="nav-item"><a  class="nav-link hvr-underline-from-center" href="{{ route('about') }}">About</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('courses') }}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Courses
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item nav-item" href="{{ route('courses_kids') }}">Courses for kids</a>
                  <a class="dropdown-item nav-item" href="{{ route('courses_teens') }}">Courses for teens</a>
                  <a class="dropdown-item nav-item" href="{{ route('courses_adults') }}">Courses for adults</a>
                  <a class="dropdown-item nav-item" href="{{ route('courses_business') }}">Business training</a>
                  <a class="dropdown-item nav-item" href="{{ route('courses_exams') }}">Cambridge exams</a>
                </div>
              </li>
            <li class="nav-item"><a  class="nav-link hvr-underline-from-center" href="{{ route('gallery') }}">Gallery</a></li>
            <li class="nav-item"><a  class="nav-link hvr-underline-from-center" href="{{ route('about') }}">Blog</a></li>
            <li class="nav-item"><a  class="nav-link hvr-underline-from-center" href="{{ route('about') }}">Contact</a></li>
          </ul>
        </div>
    </div>
  </nav>

  

