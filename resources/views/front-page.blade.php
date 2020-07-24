@extends('layouts.app')

@section('content')

<div class="bd-hero container-fluid mt-2">
    <div class="row bd-hero-top">
        <div class="col-md-4 bd-hero-top-left">
            <div class="bd-hero-date">
                <p class="body-2">○ January 19–25, 2008</p>
            </div>
        </div>
        <div class="col-md-8 bd-hero-top-right" style="background-image:url(@asset('images/placeholder/bd_placeholder_6.jpg'))">
        ...
        </div>
    </div>
    <div class="row bd-hero-btm">
        <div class="col-md bd-hero-btm-left">
            <h1>Misty Copeland Collection</h1>
        </div>
        <div class="col-md bd-hero-btm-right">
            ...
        </div>
    </div>
</div>

<div class="bd-mod-1 container-fluid mb-3">
  <div class="row">
    <a href="#" class="col-md-4 bd-mod-1-item">
      <div class="bd-mod-1-top">
          <div class="bd-mod-1-top-img" style="background-image:url(@asset('images/placeholder/bd_placeholder_10.jpg'))"></div>
      </div>
      <div class="bd-mod-1-btm">
          <p class="body-2">March 20-22, 2020</p>
          <p class="body-1">Janet Collins, Steeple Chase</p>
      </div>
    </a>
    <a href="#" class="col-md-4 bd-mod-1-item">
      <div class="bd-mod-1-top">
        <div class="bd-mod-1-top-img" style="background-image:url(@asset('images/placeholder/bd_placeholder_3.jpg'))"></div>
      </div>
      <div class="bd-mod-1-btm">
          <p class="body-2">February 1-4, 2020</p>
          <p class="body-1">John W. Bubbles, American Dancer</p>
      </div>
    </a>
    <a href="#" class="col-md-4 bd-mod-1-item">
      <div class="bd-mod-1-top">
        <div class="bd-mod-1-top-img" style="background-image:url(@asset('images/placeholder/bd_placeholder_31.jpg'))"></div>    
      </div>
      <div class="bd-mod-1-btm">
          <p class="body-2">June 15, 2020</p>
          <p class="body-1">Katherine Dunham, Well Look</p>
      </div>
    </a>
  </div>
</div>

<div class="bd-mod-2 container-fluid">
    <div class="row">
        <div class="col-md-8 bd-mod-2-left">
            <div class="bd-mod-2-left-top">
                <p class="body-2">May 27-30, 2011</p>
                <p class="body-1">Rhapsody James, Alrighty</p>
            </div>
            <div class="bd-mod-2-left-btm">
                <div class="bd-mod-2-left-img" style="background-image:url(@asset('images/placeholder/bd_placeholder_25.jpg'))"></div>
            </div>
        </div>
        <div class="col-md-4 bd-mod-2-right">
            <div class="bd-mod-2-right-top">
                <div class="bd-mod-2-right-img" style="background-image:url(@asset('images/placeholder/bd_placeholder_12.jpg'))"></div>
            </div>
            <div class="bd-mod-2-right-btm">
                <p class="body-2">December 24, 2019</p>
                <p class="body-1">Debbie Allen, Nice One</p>
            </div>
        </div>
    </div>
</div>

@endsection