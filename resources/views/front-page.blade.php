@extends('layouts.app')

@section('content')
<div class="announcement-container container-fluid mt-3 mb-3">
    <div class="row justify-content-md-center">
        <div class="col-md-5 announcement-left mt-2 mb-2">
            <h3>Announcements</h3>
        </div>
        <div class="col-md-5 announcement-right mt-2 mb-2">
            <div class="announcement-right-top">
            <p class="body-3">Vestibulum faucibus aliquam nunc, vitae tincidunt nisl volutpat eu. Proin tempus interdum odio ut luctus. Praesent blandit a leo ac vehicula. Nam pharetra ultrices odio, ac accumsan ex tristique nec. Sed eget arcu nec arcu consequat rutrum. Praesent sed aliquam quam.</p>
            <p class="body-3">Phasellus posuere bibendum magna sed congue. Pellentesque nec dignissim nibh. In ornare rutrum viverra. Aenean sollicitudin dapibus lacus nec pellentesque. Aliquam sit amet blandit risus, ut venenatis quam. </p>
            </div>
            <div class="announcement-right-btm">
                <h3>Next Episode</h3>
                <p class="body-2">Thursday the 10th at 6PM on Youtube here</p>
            </div>
            
        </div>
    </div>
</div>
<div class="bd-hero container-fluid mt-2">
    <div class="row bd-hero-top">
        <div class="col-md-4 bd-hero-top-left">
            <div class="bd-hero-date">
                <p class="body-2"><i class="fas fa-circle"></i> January 19–25, 2008</p>
            </div>
        </div>
        <div class="col-md-8 bd-hero-top-right multiple-items">
                <a href="/talk/talk-test" class="bd-hero-top-right-bg" style="background-image:url(@asset('images/placeholder/bd_placeholder_6.jpg'))"></a>
                <a href="/calendar" class="bd-hero-top-right-bg" style="background-image:url(@asset('images/placeholder/bd_placeholder_10.jpg'))"></a>
                <a href="/blog-test" class="bd-hero-top-right-bg" style="background-image:url(@asset('images/placeholder/bd_placeholder_12.jpg'))"></a>
                <a href="/about" class="bd-hero-top-right-bg" style="background-image:url(@asset('images/placeholder/bd_placeholder_5.jpg'))"></a>
        </div>
    </div>
    <div class="row bd-hero-btm">
        <div class="col-md bd-hero-btm-left multiple-items-for">
            <h1 class="hero-title"><a class="hero-link" href="/talk/talk-test">Interesting Talk Test</a></h1>
            <h1 class="hero-title"><a class="hero-link" href="/calendar">Cool Calendar Test</a></h1>
            <h1 class="hero-title"><a class="hero-link" href="/blog-test">Nice Blog Test</a></h1>
            <h1 class="hero-title"><a class="hero-link" href="/about">Good About Test</a></h1>
        </div>
        <div class="col-md bd-hero-btm-right">
        </div>
    </div>
</div>


<div class="bd-mod-1 container-fluid mb-3">
  <div class="row">
    <a href="#" class="col-md-4 bd-mod-1-item">
      <div class="bd-mod-1-top">
          <div class="bd-mod-1-top-img" style="background-image:url(@asset('images/placeholder/bd_placeholder_20.jpg'))"></div>
      </div>
      <div class="bd-mod-1-btm">
          <p class="body-2"><i class="fas fa-circle"></i> March 20-22, 2020</p>
          <p class="body-1">Janet Collins, Steeple Chase</p>
      </div>
    </a>
    <a href="#" class="col-md-4 bd-mod-1-item">
      <div class="bd-mod-1-top">
        <div class="bd-mod-1-top-img" style="background-image:url(@asset('images/placeholder/bd_placeholder_3.jpg'))"></div>
      </div>
      <div class="bd-mod-1-btm">
          <p class="body-2"><i class="fas fa-circle"></i> February 1-4, 2020</p>
          <p class="body-1">John W. Bubbles, American Dancer</p>
      </div>
    </a>
    <a href="#" class="col-md-4 bd-mod-1-item">
      <div class="bd-mod-1-top">
        <div class="bd-mod-1-top-img" style="background-image:url(@asset('images/placeholder/bd_placeholder_31.jpg'))"></div>    
      </div>
      <div class="bd-mod-1-btm">
          <p class="body-2"><i class="fas fa-circle"></i> June 15, 2020</p>
          <p class="body-1">Katherine Dunham, Well Look</p>
      </div>
    </a>
  </div>
</div>

<div class="bd-mod-2 container-fluid">
    <div class="row">
        <div class="col-md-8 bd-mod-2-left">
            <div class="bd-mod-2-left-top">
                <p class="body-2"><i class="fas fa-circle"></i> May 27-30, 2011</p>
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
                <p class="body-2"><i class="fas fa-circle"></i> December 24, 2019</p>
                <p class="body-1">Debbie Allen, Nice One</p>
            </div>
        </div>
    </div>
</div>

<div class="bd-mod-2 container-fluid">
    <div class="row">
        <div class="col-md-4 bd-mod-2-right">
            <div class="bd-mod-2-right-top">
                <div class="bd-mod-2-right-img" style="background-image:url(@asset('images/placeholder/bd_placeholder_18.jpg'))"></div>
            </div>
            <div class="bd-mod-2-right-btm">
                <p class="body-2"><i class="fas fa-circle"></i> December 24, 2019</p>
                <p class="body-1">Krystian Miles, Yea Yea</p>
            </div>
        </div>
        <div class="col-md-8 bd-mod-2-left">
                <div class="bd-mod-2-left-top">
                    <p class="body-2"><i class="fas fa-circle"></i> May 27-30, 2011</p>
                    <p class="body-1">Rhian Marsh, Wowzers</p>
                </div>
                <div class="bd-mod-2-left-btm">
                    <div class="bd-mod-2-left-img" style="background-image:url(@asset('images/placeholder/bd_placeholder_8.jpg'))"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="bd-mod-1 container-fluid mb-3">
  <div class="row">
    <a href="#" class="col-md-4 bd-mod-1-item">
      <div class="bd-mod-1-top">
          <div class="bd-mod-1-top-img" style="background-image:url(@asset('images/placeholder/bd_placeholder_24.jpg'))"></div>
      </div>
      <div class="bd-mod-1-btm">
          <p class="body-2"><i class="fas fa-circle"></i> October 01-12, 2021</p>
          <p class="body-1">Lilly-Grace Stokes, Barclays</p>
      </div>
    </a>
    <a href="#" class="col-md-4 bd-mod-1-item">
      <div class="bd-mod-1-top">
        <div class="bd-mod-1-top-img" style="background-image:url(@asset('images/placeholder/bd_placeholder_1.jpg'))"></div>
      </div>
      <div class="bd-mod-1-btm">
          <p class="body-2"><i class="fas fa-circle"></i> March 16-24, 2020</p>
          <p class="body-1">Ayaana Leal, Down and Dirty</p>
      </div>
    </a>
    <a href="#" class="col-md-4 bd-mod-1-item">
      <div class="bd-mod-1-top">
        <div class="bd-mod-1-top-img" style="background-image:url(@asset('images/placeholder/bd_placeholder_29.jpg'))"></div>    
      </div>
      <div class="bd-mod-1-btm">
          <p class="body-2"><i class="fas fa-circle"></i> September 18, 2020</p>
          <p class="body-1">Riya Jenkins, Sweet</p>
      </div>
    </a>
  </div>
</div>

<div class="container-fluid join-us-container">
    <div class="row">
        <div class="col-md join-us-left">
            <h2 class="join-us-left-title">Join Us</h2>
            <p class="body-2 join-us-left-copy"> Please, join our mailing list to get weekly updates on our programs, screenings and special events</p>
        </div>
        <div class="col-md join-us-right">
            <div class="join-us-right-input">
            <?php
                /*
                    echo get_field( 'newsletter_signup' );
                */
            ?> 
            </div>
        </div>
    </div>
</div>
<div class="container-fluid patreon-container">
    <div class="row">
        <div class="col-md patreon-left">
            <h2  class="patreon-left-title">Become a Patron</h2>
            <p class="body-2 patreon-left-copy"> Subscribe and support our Patreon for even more exclusive content like access to exclusive weekly bonus episodes with special guests and deep dives.</p>
        </div>
        <div class="col-md patreon-right">
            <div class="patreon-right-input">
                <button type="button" class="btn bd-btn-1">Visit Patreon</button>
            </div>
        </div>
    </div>
</div>

@endsection