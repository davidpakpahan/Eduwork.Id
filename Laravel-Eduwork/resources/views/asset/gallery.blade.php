@extends('frontend.frontend-asset.frontend')
@section('menuGallery', 'active')
@section('content')
    <!-- gallery -->
  <div  class="gallery">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Gallery</h2>
                <span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy </span>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-4 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset ('asset/images/gallery1.png') }}" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-4 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset ('asset/images/gallery2.png') }}" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-4 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset ('asset/images/gallery3.png') }}" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-4 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset ('asset/images/gallery4.png') }}" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-4 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset ('asset/images/gallery5.png') }}" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-4 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ asset ('asset/images/gallery6.png') }}" alt="#"/></figure>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end gallery -->
@endsection