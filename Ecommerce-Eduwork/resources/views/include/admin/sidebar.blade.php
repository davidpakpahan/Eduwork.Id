<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="bi bi-shop"></i>
      </div>
      <div class="sidebar-brand-text mx-3">E-COMMERCE</div>
  </a>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <!-- Nav Item - Dashboard -->
  <li class="nav-item @yield('menuDashboard')">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="bi bi-house-door-fill"></i>
          <span>Dashboard</span></a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Nav Item - Category -->
  <li class="nav-item @yield('menuCategory')">
      <a class="nav-link" href="{{ route('category') }}">
        <i class="bi bi-table"></i>
          <span>Category</span>
      </a>
  </li>
  <!-- Nav Item - Add Category -->
  <li class="nav-item @yield('menuaddCategory')">
      <a class="nav-link" href="{{ route('add.category') }}">
        <i class="bi bi-folder-plus"></i>
          <span>Add Category</span>
      </a>
  </li>
  <!-- Nav Item - Product -->
  <li class="nav-item @yield('menuProduct')">
    <a class="nav-link" href="{{ route('product') }}">
      <i class="bi bi-bag"></i>
        <span>Product</span>
    </a>
  </li>
  <!-- Nav Item - Add Product -->
  <li class="nav-item @yield('menuaddProduct')">
    <a class="nav-link" href="{{ route('add.product') }}">
      <i class="bi bi-folder-plus"></i>
        <span>Add Product</span>
    </a>
  </li>
   <!-- Nav Item - Logout -->
   <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
          <i class="bi bi-box-arrow-right"></i>
          <span> {{ __('Logout') }}</span>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
  </li>
</ul>
<!-- End of Sidebar -->