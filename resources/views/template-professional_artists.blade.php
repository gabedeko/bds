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
        'orderby' => 'date',
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
        'orderby' => 'date',
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
        
        <div id="ype-circle-logo" class="col-md bd-hero-top-right ype-top-right ype-circle-logo animate__animated animate__fadeIn" style="background-image:url(@asset('images/ya/BDS_YPE_CircleBanner.png')">
        </div>
        <div id="ype-journal-logo" class="col-md bd-hero-top-right ype-top-right ype-journal-logo" style="background-image:url(@asset('images/ya/BDS_YPE_Journal_Logo_Pick.png')">
        </div> 
        <div id="ype-banner-logo" class="col-md bd-hero-top-right ype-top-right ype-banner-logo" style="background-image:url(@asset('images/ya/BDS_YPE_Banner_2.png')">
        </div>
          
        
        
    </div>
    <div class="row bd-hero-btm">
        <div class="col-md-12 bd-hero-btm-left">
            <h1 class="bd-hero-title"><i class="fas fa-circle"></i> Young Professional Experience</h1>
        </div>
        <div class="col-md bd-hero-btm-right">
        
        </div>
    </div>
</div>

<div class="container-fluid young-tabs-container">
  <ul class="nav nav-tabs young-tabs mb-3" id="youngTabs" role="tablist">
    <li class="nav-item young-tab young-tab-0" role="presentation">
      <button class="nav-link young-link-0 young-tab-link active" id="young-link-0" data-bs-toggle="tab" data-bs-target="#young-pane-0" type="button" role="tab" aria-controls="young-pane-0" aria-selected="true">POWER HALF-HOUR</button>
    </li>
    <li class="nav-item young-tab young-tab-1" role="presentation">
      <button class="nav-link young-link-1 young-tab-link" id="young-link-1" data-bs-toggle="tab" data-bs-target="#young-pane-0" type="button" role="tab" aria-controls="young-pane-0" aria-selected="false">THE YPE JOURNAL</button>
    </li>
    <li class="nav-item young-tab young-tab-2" role="presentation">
      <button class="nav-link young-link-2 young-tab-link" id="young-link-2" data-bs-toggle="tab" data-bs-target="#young-pane-0" type="button" role="tab" aria-controls="young-pane-0" aria-selected="false">JOIN</button>
    </li>
  </ul>
</div>
<div class="container-fluid tab-content young-tab-content" id="youngTabContent">
    <div class="row young-ep-row tab-pane fade young-pane-0 young-pane animate__animated animate__fadeIn" id="young-pane-0" role="tabpanel" aria-labelledby="home-tab">
      
    <?php if ( $the_query_0->have_posts() ) : while ( $the_query_0->have_posts() ) : $the_query_0->the_post();
?>
    <?php
    $yp_desc = get_field('yp_desc');
    $power_half_hour = get_field('power_half_hour');
    $pronouns = get_field('pronouns');
    $photo = get_field('photo');
    $project = get_field('project');
    $share_story_media = get_field('share_story_media');
    $share_story_text = get_field('share_story_text');
    $power_half_hour_video = get_field('power_half_hour_video');
    //Crop description at whitespace
    $desc_length = strlen($yp_desc);
    $maxDescLength = 320;

    if ($power_half_hour == "yes"){
      ?>

      <a class="young-ep-item" href="<?php the_permalink(); ?>">
        <div class="col-md ep-left">
            <h3 class="ep-title"><?php the_title(); ?></h3>
            <h5 class="ep-date"><?php the_date('l, F j, Y'); ?></h5>
            <p class="ep-desc"><?php 
            //Crop description at whitespace 
                if ($desc_length > $maxDescLength) {
                  echo substr($yp_desc, 0, strrpos($yp_desc, ' ', $maxDescLength-$desc_length));
                  echo "...";
              } else {
                  echo $yp_desc;
              }
             ?></p>
            
        </div>
        <div class="col-md ep-right" style="background-image:url(<?php echo esc_url($photo['url']) ?>)">
        </div>
      </a>
    <?php } ?>
      <?php 
    $query_item_num_0++;
    ?>
    <?php endwhile; else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
    <?php wp_reset_query(); ?>
    
      <?php /*
      <div class="young-ep-item">
        <div class="col-md ep-left">
            <h3 class="ep-title">Title</h3>
            <h5 class="ep-date">Date</h5>
            <p class="ep-desc">Phasellus condimentum dui et convallis iaculis. Nulla imperdiet sapien tincidunt odio consequat, a sollicitudin nisi fringilla. In quis suscipit mi. Aenean id enim varius, gravida risus in, egestas eros. Duis dolor lectus, scelerisque a eros ut, vulputate tempus sapien. Suspendisse interdum tempor cursus. Aenean aliquam luctus diam congue iaculis. </p>
        </div>
        <div class="col-md ep-right" style="background-image:url(@asset('images/placeholder/bd_placeholder_21.jpg'))">
        </div>
      </div>
      */ ?>
    </div>
    <div class="tab-pane fade young-pane-2 young-pane row young-artist-form-row" id="young-pane-2" role="tabpanel" aria-labelledby="contact-tab">
      <div class="col-md-6 young-artist-form-left p-5 d-flex align-items-center">
          <p class="body-2">
            <div class="form-copy">
              <?php
              $form_copy = get_field('form_copy');
              echo $form_copy;
              ?>
            </div>
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
    $yp_desc_ = get_field('yp_desc');
    $power_half_hour_ = get_field('power_half_hour');
    $pronouns_ = get_field('pronouns');
    $photo_ = get_field('photo');
    $project_ = get_field('project');
    $share_story_media_ = get_field('share_story_media');
    $share_story_text_ = get_field('share_story_text');
    $power_half_hour_video_ = get_field('power_half_hour_video');

    if ($power_half_hour_ == "no"){
      ?>
        <div class="col-sm-6 col-lg-4 mb-4 young-artist-card-col">
          <a href="<?php the_permalink(); ?>" class="card young-artist-card">
            <div class="young-artist-card-top" style="background-image:url(<?php echo esc_url($photo_['url']) ?>);">
            </div>
            <div class="card-body young-artist-card-btm">
              <h4 class="card-title"><?php the_title(); ?></h4>
              <h5 class="card-text text-center"><?php echo $pronouns_ ?></h5>
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
    
    <?php /*
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
    */ ?>
  </div>
  <?php /*
  <div class="row">
    <a class="text-center" href="https://linktr.ee/blackdancestories" target="_blank"><button type="button" class="btn bd-btn-3">Load More</button></a>
  </div>
  */ ?>
</div>


  @endwhile
@endsection

