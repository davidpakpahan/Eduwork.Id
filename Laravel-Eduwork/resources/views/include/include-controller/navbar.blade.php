<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">David Pakpahan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link @yield('menuHome')" href="home-controller">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('menuProduct')" href="product-controller">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('menuDetailProduct')" href="detail-product-controller">Detail Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('menuCart')" href="cart-controller">Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('menuCheckout')" href="checkout-controller">Checkout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('menuCheckoutSuccess')" href="checkout-success-controller">Checkout Success</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>