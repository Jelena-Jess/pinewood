<nav class="navbar nav-upper navbar-expand-md navbar-light shadow-sm bg-footer">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item pr-4"><span href=""><i class="fa fa-envelope-o" aria-hidden="true"></i> info@example.com</span></li>
            <li class="nav-item"><span href=""><i class="fa fa-phone" aria-hidden="true"></i> 888 888 8888</span></li>
        </ul>
        <ul class="navbar-nav">
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
            <li><a  class="nav-link hvr-underline-from-center" href="">Home</a></li>
            <li><a  class="nav-link hvr-underline-from-center" href="">About</a></li>
            <li><a  class="nav-link hvr-underline-from-center" href="">Courses</a></li>
            <li><a  class="nav-link hvr-underline-from-center" href="">Gallery</a></li>
            <li><a  class="nav-link hvr-underline-from-center" href="">Blog</a></li>
            <li><a  class="nav-link hvr-underline-from-center" href="">Contact</a></li>
          </ul>
      </div>
  </div>
</nav>