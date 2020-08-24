@extends('layouts.app')

@section('content')

<div class="bd-hero container-fluid mt-2">
    <div class="row bd-hero-top">
        <div class="col-md-4 bd-hero-top-left">
            <div class="bd-hero-date">
                <p class="body-2"><i class="fas fa-circle"></i> July 19–25, 2012</p>
            </div>
        </div>
        <div class="col-md-8 bd-hero-top-right" style="background-image:url(@asset('images/placeholder/bd_placeholder_9.jpg'))">
        
        </div>
    </div>
    <div class="row bd-hero-btm">
        <div class="col-md bd-hero-btm-left">
            <h1>La La Land</h1>
        </div>
        <div class="col-md bd-hero-btm-right">
            <div class="hero-share">
                <h4>SHARE:
                <a class="hero-share-link" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a class="hero-share-link" href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                <a class="hero-share-link" href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
                </h4>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
  <div class="row justify-content-md-center">
      <div class="col-md-8">
        <p class="body-1"> Praesent bibendum ex augue, vel dictum diam vestibulum eu. Maecenas blandit nibh maximus, ultricies massa at, ullamcorper purus. Maecenas tincidunt fringilla dignissim. Cras dignissim eros urna, in pulvinar erat commodo at. Etiam pellentesque convallis blandit. Vestibulum sed ex massa. Donec ut dui sit amet nibh placerat volutpat. Morbi lorem est, ultrices vel semper sit amet, elementum sed velit. Nunc porttitor nisl ac nibh rutrum lobortis. Phasellus quis leo augue. Ut sed libero id metus tincidunt porta. Vivamus ut metus neque. Nam est eros, porttitor non nisl a, bibendum porttitor sem. Mauris nec diam nibh. Duis convallis hendrerit facilisis. Proin auctor euismod lorem.</p>
      </div>
  </div>
  <div class="row mt-5 justify-content-md-center">
    <div class="col-md-10">
        <iframe class="bd-talk-video" width="" height="500" src="https://www.youtube.com/embed/KI7f6rb0WME" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</div>

@endsection
