<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">David Pakpahan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link @yield('menuHome')" href="{{ url('model-pagination') }}">Model and Pagination</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('menuOneToMany')" href="{{ url('one-to-many') }}">One To Many</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>