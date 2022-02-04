<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
          <h4 class="text-uppercase">E-Commerce Eduwork</h4>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav me-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ms-auto text-uppercase text-center">
              <!-- Authentication Links -->
              <li class="nav-item">
                <a class="nav-link @yield('menuHome')" href="{{ url('/') }}"><i class="bi bi-house-door-fill"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('menuCategory')" href="{{ url('/category') }}"><i class="bi bi-tags-fill"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('menuCart')" href="{{ url('/cart') }}"><i class="bi bi-cart-fill"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('menuCheckout')" href="{{ url('/checkout') }}"><i class="bi bi-bag-fill"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('menuAdmin')" href="{{ url('/admin/dashboard') }}"><i class="bi bi-shop"></i></a>
              </li>
              @guest
                  @if (Route::has('login'))
                      <li class="nav-item">
                          <a class="nav-link @yield('menuLogin')" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                  @endif

                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link @yield('menuRegister')" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle"></i>
                      {{ Auth::user()->firstName }}
                  </a>
                  <ul class="dropdown-menu bg-danger" aria-labelledby="navbarDropdown">
                      <li>
                          <a class="dropdown-item text-center text-dark" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </li>
                  </ul>
              </li>
              <li class="nav-item">
                <a href="https://id.wikipedia.org/wiki/Indonesia" target="_blink">
                 <img src="{{ asset('img/flag.png') }}" width="42px" height="42px" alt="Flag Image">
                </a>
              </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>