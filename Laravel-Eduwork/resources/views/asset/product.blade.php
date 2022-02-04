@extends('frontend.frontend-asset.frontend')
@section('menuProduct', 'active')
@section('content')
      <!-- our products -->
      <div class="products">
        <div class="container">
           <div class="row">
              <div class="col-md-7">
                 <div class="titlepage">
                   
                    <span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptu
                    </span>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6">
                 <div id="ho_bo" class="our_products">
                    <div class="product">
                       <figure><img src="{{ asset ('asset/images/pro1.png') }}" alt="#"/></figure>
                    </div>
                    <h3>Mangoes For Juice</h3>
                    <span>Nam libero tempore</span>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non </p>
                 </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                 <div id="ho_bo" class="our_products">
                    <div class="product">
                       <figure><img src="{{ asset ('asset/images/pro2.png') }}" alt="#"/></figure>
                    </div>
                    <h3>Apple For Juice</h3>
                    <span>Nam libero tempore</span>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non </p>
                 </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                 <div id="ho_bo" class="our_products">
                    <div class="product">
                       <figure><img src="{{ asset ('asset/images/pro3.png') }}" alt="#"/></figure>
                    </div>
                    <h3>Orange For Juice</h3>
                    <span>Nam libero tempore</span>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non </p>
                 </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                 <div id="ho_bo" class="our_products">
                    <div class="product">
                       <figure><img src="{{ asset ('asset/images/pro4.png') }}" alt="#"/></figure>
                    </div>
                    <h3>Pineapple For Juice</h3>
                    <span>Nam libero tempore</span>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non </p>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- end our products -->
@endsection