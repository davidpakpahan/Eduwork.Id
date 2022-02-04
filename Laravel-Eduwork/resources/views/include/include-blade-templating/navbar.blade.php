<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">David Pakpahan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link @yield('menuHome')" href="home-blade-templating">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('menuProduct')" href="product-blade-templating">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('menuDetailProduct')" href="detail-product-blade-templating">Detail Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('menuCart')" href="cart-blade-templating">Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('menuCheckout')" href="checkout-blade-templating">Checkout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('menuCheckoutSuccess')" href="checkout-success-blade-templating">Checkout Success</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>