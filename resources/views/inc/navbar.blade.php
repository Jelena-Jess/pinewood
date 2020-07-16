<nav class="navbar navbar-expand-md navbar-light shadow-sm bg-dark">
    <div class="container nav-upper">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><span  class="nav-link" href="">info@example.com</span></li>
            <li class="nav-item"><span  class="nav-link" href="">888 888 8888</span></li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li>
                    <span>|</span>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'Pinewood') }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="nav-main navbar-nav ml-auto">
            <li><a  class="nav-link hvr-underline-from-center pink" href="">Home</a></li>
            <li><a  class="nav-link hvr-underline-from-center blue" href="">About</a></li>
            <li><a  class="nav-link hvr-underline-from-center green" href="">Courses</a></li>
            <li><a  class="nav-link hvr-underline-from-center orange" href="">Gallery</a></li>
            <li><a  class="nav-link hvr-underline-from-center purple" href="">Blog</a></li>
            <li><a  class="nav-link hvr-underline-from-center red" href="">Contact</a></li>
          </ul>
      </div>
  </div>
</nav>