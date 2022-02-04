@extends('frontend.frontend-asset.frontend')
@section('menuAbout', 'active')
@section('content')
<div class="back_re">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="title">
                     <h2>About Us</h2>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- about -->
 <div id="about" class="about">
    <div class="container">
       <div class="row">
          <div class="col-md-6 offset-md-3">
             <div class="titlepage">
               
                <span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptu </span>
             </div>
          </div>
          <div class="col-md-12">
             <div class="about_img">
                <figure><img src="{{ asset('asset/images/about.png') }}" alt="#"/></figure>
                <a class="read_more" href="Javascript:void(0)"> Read More</a>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end about -->
@endsection