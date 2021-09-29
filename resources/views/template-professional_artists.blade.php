{{--
  Template Name: Young Professional Template
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
        'post_type' =>array('young_professional'),
        'post_status' => 'publish',
        'posts_per_page' => 20,
    );
    $the_query_0 = new WP_Query( $args_0 );
    $query_item_num_0 = 0;
  ?>
  <?php 
    $args_1 = array( 
        'orderby' => 'title',
        'order'   => 'DESC',
        'post_type' =>array('young_professional'),
        'post_status' => 'publish',
        'posts_per_page' => 20,
    );
    $the_query_1 = new WP_Query( $args_1 );
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
            <h1 class="bd-hero-title"><i class="fas fa-circle"></i> Young Professional Experience</h1>
        </div>
        <div class="col-md bd-hero-btm-right">
        
        </div>
    </div>
</div>

<div class="container-fluid">
  <ul class="nav nav-tabs young-tabs mb-3" id="youngTabs" role="tablist">
    <li class="nav-item young-tab young-tab-0" role="presentation">
      <button class="nav-link young-link-0 young-tab-link active" id="young-link-0" data-bs-toggle="tab" data-bs-target="#young-pane-0" type="button" role="tab" aria-controls="young-pane-0" aria-selected="true">Power Half-Hour</button>
    </li>
    <li class="nav-item young-tab young-tab-1" role="presentation">
      <button class="nav-link young-link-1 young-tab-link" id="young-link-1" data-bs-toggle="tab" data-bs-target="#young-pane-0" type="button" role="tab" aria-controls="young-pane-0" aria-selected="false">The YPE Journals</button>
    </li>
    <li class="nav-item young-tab young-tab-2" role="presentation">
      <button class="nav-link young-link-2 young-tab-link" id="young-link-2" data-bs-toggle="tab" data-bs-target="#young-pane-0" type="button" role="tab" aria-controls="young-pane-0" aria-selected="false">Join</button>
    </li>
  </ul>
</div>
<div class="container-fluid tab-content young-tab-content" id="youngTabContent">
    <div class="row young-ep-row tab-pane fade young-pane-0 young-pane animate__animated animate__fadeIn" id="young-pane-0" role="tabpanel" aria-labelledby="home-tab">
      
    <?php if ( $the_query_0->have_posts() ) : while ( $the_query_0->have_posts() ) : $the_query_0->the_post();
?>
    <?php
    $power = get_field('power_half_hour');
    if ($power == "yes"){
      ?>

      <div class="young-ep-item">
        <div class="col-md ep-left">
            <h3 class="ep-title"><?php the_title(); ?></h3>
            <h5 class="ep-date">Date</h5>
            <p class="ep-desc">Success </p>
        </div>
        <div class="col-md ep-right" style="background-image:url(@asset('images/placeholder/bd_placeholder_20.jpg'))">
        </div>
      </div>
    <?php } ?>
      <?php 
    $query_item_num_0++;
    ?>
    <?php endwhile; else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
    <?php wp_reset_query(); ?>
    

    
      
      <div class="young-ep-item">
        <div class="col-md ep-left">
            <h3 class="ep-title">Title</h3>
            <h5 class="ep-date">Date</h5>
            <p class="ep-desc">Phasellus condimentum dui et convallis iaculis. Nulla imperdiet sapien tincidunt odio consequat, a sollicitudin nisi fringilla. In quis suscipit mi. Aenean id enim varius, gravida risus in, egestas eros. Duis dolor lectus, scelerisque a eros ut, vulputate tempus sapien. Suspendisse interdum tempor cursus. Aenean aliquam luctus diam congue iaculis. </p>
        </div>
        <div class="col-md ep-right" style="background-image:url(@asset('images/placeholder/bd_placeholder_21.jpg'))">
        </div>
      </div>
      <div class="young-ep-item">
        <div class="col-md ep-left">
            <h3 class="ep-title">Title</h3>
            <h5 class="ep-date">Date</h5>
            <p class="ep-desc">Phasellus condimentum dui et convallis iaculis. Nulla imperdiet sapien tincidunt odio consequat, a sollicitudin nisi fringilla. In quis suscipit mi. Aenean id enim varius, gravida risus in, egestas eros. Duis dolor lectus, scelerisque a eros ut, vulputate tempus sapien. Suspendisse interdum tempor cursus. Aenean aliquam luctus diam congue iaculis. </p>
        </div>
        <div class="col-md ep-right" style="background-image:url(@asset('images/placeholder/bd_placeholder_22.jpg'))">
        </div>
      </div>
    </div>
    <div class="tab-pane fade young-pane-2 young-pane row young-artist-form-row" id="young-pane-2" role="tabpanel" aria-labelledby="contact-tab">
      <div class="col-md-6 young-artist-form-left p-5 d-flex align-items-center">
          <p class="body-2">
          <?php
          $form_copy = get_field('form_copy');
          echo $form_copy;
          ?>
          </p>
      </div>
      <div class="col-md-6 young-artist-form-right p-5">
          @include('partials.content-page')
      </div>
    </div>
    <div class="tab-pane fade young-pane-1 young-pane row masonry" id="young-pane-1" role="tabpanel" aria-labelledby="profile-tab" data-masonry='{"percentPosition": true }'>

    <?php if ( $the_query_1->have_posts() ) : while ( $the_query_1->have_posts() ) : $the_query_1->the_post();
?>
    <?php
    $power = get_field('power_half_hour');
    if ($power == "no"){
      ?>
        <div class="col-sm-6 col-lg-4 mb-4 young-artist-card-col">
          <a href="/young_artist/ikaros-montana/" class="card young-artist-card">
            <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_1.jpg'));">
            </div>
            <div class="card-body young-artist-card-btm">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text">Success</p>
              <p><?php echo $power; ?></p>
            </div>
          </a>
        </div>
      <?php
    }
    ?>

    <?php 
    $query_item_num_1++;
    ?>
    <?php endwhile; else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
    <?php wp_reset_query(); ?>
      
    <div class="col-sm-6 col-lg-4 mb-4 young-artist-card-col">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_2.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Amit Mckee</h5>
          <p class="card-text">Sed eleifend, quam mattis sagittis posuere, turpis lacus consectetur tortor, vel ultricies dui ex id enim.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4 young-artist-card-col">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_3.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Juan Whitmore</h5>
          <p class="card-text">Suspendisse potenti. Quisque metus ante, pellentesque ut suscipit eget, laoreet non enim. </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4 young-artist-card-col">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_4.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Bert Padilla</h5>
          <p class="card-text">Nulla pellentesque ligula eu ipsum placerat facilisis.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4 young-artist-card-col">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_5.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Katey Parkes</h5>
          <p class="card-text">Nam aliquam turpis at ante molestie tempus.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4 young-artist-card-col">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_6.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Tammy Avila</h5>
          <p class="card-text">Morbi elementum ex quis elit tristique, vitae convallis dui tempor. Morbi ut sapien massa. </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4 young-artist-card-col">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_7.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Hibba Ingram</h5>
          <p class="card-text">Sed quam dui, accumsan at euismod nec, egestas sit amet arcu. Vivamus pellentesque quam leo, ac posuere orci euismod in. </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4 young-artist-card-col">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_8.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Hughie Gamble</h5>
          <p class="card-text">usce ultrices tortor et ex condimentum consequat.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4 young-artist-card-col">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_9.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Amalie Cook</h5>
          <p class="card-text">Donec imperdiet malesuada viverra. Aenean in tortor malesuada, vestibulum enim blandit, rutrum justo. </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4 young-artist-card-col">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_10.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Kerrie Chapman</h5>
          <p class="card-text">Maecenas feugiat mi mauris, eu pharetra nunc finibus eget. </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4 young-artist-card-col">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_11.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Miriam Moyer</h5>
          <p class="card-text">Mauris orci ex, condimentum a convallis eget, gravida ac sem. Sed lorem enim, efficitur lobortis sapien sit amet, posuere pellentesque lorem.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4 young-artist-card-col">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_12.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Amisha Henderson</h5>
          <p class="card-text">Vestibulum sit amet iaculis justo. </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4 young-artist-card-col">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_13.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Samuel Sargent</h5>
          <p class="card-text">Pellentesque porttitor euismod arcu ut vestibulum.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4 young-artist-card-col">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_14.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Efan Dowling</h5>
          <p class="card-text">Duis ullamcorper id justo et feugiat.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4 young-artist-card-col">
      <div class="card young-artist-card">
        <div class="young-artist-card-top" style="background-image:url(@asset('images/ya/young_artist_15.jpg'));">
        </div>
        <div class="card-body young-artist-card-btm">
          <h5 class="card-title">Brianna Blair</h5>
          <p class="card-text">Aenean sit amet turpis convallis, ultrices sem vitae, iaculis arcu. </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4 young-artist-card-col">
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
  <?php /*
  <div class="row">
    <a class="text-center" href="https://linktr.ee/blackdancestories" target="_blank"><button type="button" class="btn bd-btn-3">Load More</button></a>
  </div>
  */ ?>
</div>


  @endwhile
@endsection

