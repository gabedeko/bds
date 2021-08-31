{{--
  Template Name: Young Artists Template
--}}

<?php /*
Bootstrap 5 Masonry
---
In v4 we used a CSS-only technique to mimic the behavior of Masonry-like columns, but this technique came with lots of unpleasant side effects. If you want to have this type of layout in v5, you can just make use of Masonry plugin. Masonry is not included in Bootstrap, but we’ve made a demo example to help you get started.
---
https://getbootstrap.com/docs/5.0/examples/masonry/
*/ ?>

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  
  <!--Loop 1: For the 3 posts above the showcase module-->
  <?php 
    $args_0 = array( 
        'orderby' => 'title',
        'order'   => 'DESC',
        'post_type' =>array('artist'),
        'post_status' => 'publish',
        'posts_per_page' => 20,
    );
    $the_query_0 = new WP_Query( $args_0 );
    $query_item_num_1 = 0;
    ?>

<div class="bd-hero bd-hero-2 container-fluid mt-2">
    <div class="row bd-hero-top">
        <div class="col-md-4 bd-hero-top-left">
        <div class="bd-hero-border"></div>
        <div class="bd-hero-date"></div>
        </div>
        <?php /*
        <div class="col-md-8 bd-hero-top-right" style="background-image:url(@asset('images/placeholder/bd_placeholder_32.jpg'))">
        
        </div>
        */ ?>
    </div>
    <div class="row bd-hero-btm">
        <div class="col-md-12 bd-hero-btm-left">
            <h1 class="bd-hero-title"><i class="fas fa-circle"></i> Young Artists Experience</h1>
        </div>
        <div class="col-md bd-hero-btm-right">
            
        </div>
    </div>
</div>

<div class="container-fluid">
  <div class="row" data-masonry='{"percentPosition": true }'>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_1.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Ikaros Montana</h5>
          <p class="card-text">Suspendisse ac malesuada nunc, ac vestibulum augue.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_2.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Amit Mckee</h5>
          <p class="card-text">Sed eleifend, quam mattis sagittis posuere, turpis lacus consectetur tortor, vel ultricies dui ex id enim.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_3.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Juan Whitmore</h5>
          <p class="card-text">Suspendisse potenti. Quisque metus ante, pellentesque ut suscipit eget, laoreet non enim. </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_4.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Bert Padilla</h5>
          <p class="card-text">Nulla pellentesque ligula eu ipsum placerat facilisis.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_5.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Katey Parkes</h5>
          <p class="card-text">Nam aliquam turpis at ante molestie tempus.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_6.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Tammy Avila</h5>
          <p class="card-text">Morbi elementum ex quis elit tristique, vitae convallis dui tempor. Morbi ut sapien massa. </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_7.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Hibba Ingram</h5>
          <p class="card-text">Sed quam dui, accumsan at euismod nec, egestas sit amet arcu. Vivamus pellentesque quam leo, ac posuere orci euismod in. </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_8.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Hughie Gamble</h5>
          <p class="card-text">usce ultrices tortor et ex condimentum consequat.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_9.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Amalie Cook</h5>
          <p class="card-text">Donec imperdiet malesuada viverra. Aenean in tortor malesuada, vestibulum enim blandit, rutrum justo. </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_10.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Kerrie Chapman</h5>
          <p class="card-text">Maecenas feugiat mi mauris, eu pharetra nunc finibus eget. </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_11.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Miriam Moyer</h5>
          <p class="card-text">Mauris orci ex, condimentum a convallis eget, gravida ac sem. Sed lorem enim, efficitur lobortis sapien sit amet, posuere pellentesque lorem.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_12.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Amisha Henderson</h5>
          <p class="card-text">Vestibulum sit amet iaculis justo. </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_13.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Samuel Sargent</h5>
          <p class="card-text">Pellentesque porttitor euismod arcu ut vestibulum.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_14.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Efan Dowling</h5>
          <p class="card-text">Duis ullamcorper id justo et feugiat.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_15.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Brianna Blair</h5>
          <p class="card-text">Aenean sit amet turpis convallis, ultrices sem vitae, iaculis arcu. </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_11.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Tayla Lim</h5>
          <p class="card-text">In facilisis magna quis mauris tincidunt fringilla.</p>
        </div>
      </div>
    </div>
  </div>
</div>



  @endwhile
@endsection