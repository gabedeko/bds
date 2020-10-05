@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
<div class="bd-hero container-fluid mt-2">
    <div class="row bd-hero-top">
        <div class="col-md-4 bd-hero-top-left">
            <div class="bd-hero-date">
                <p class="body-2"><i class="fas fa-circle"></i> <?php the_date('l, F j, Y'); ?></p>
            </div>
        </div>
        <div class="col-md-8 bd-hero-top-right" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
        
        </div>
    </div>
    <div class="row bd-hero-btm">
        <div class="col-md bd-hero-btm-left">
            <h1><?php the_title(); ?></h1>
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
        <?php echo the_content(); ?>
      </div>
  </div>
  <div class="row justify-content-md-center mt-5 justify-content-md-center">
  <?php
    //Check if "show announcement" checkbox is checked
    $image = get_field('image');
    $video_type = get_field('video_type');
    $video_id = get_field('video_id');
    if($image){ ?>
    <div class="col-md-6 talk-image-2">
        <img src="<?php echo $image['url'] ?>" alt="">
    </div>
    <?php } ?>
  </div>
  <div class="row mt-5 justify-content-md-center">
    <div class="col-md-10">

    <?php if ($video_type == 'youtube'){ ?>
        <iframe id="" class="bd-talk-video" width="" height="560" src="https://www.youtube.com/embed/<?php echo $video_id; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
    <?php } else if  ($video_type == 'vimeo') { ?>
        <iframe id="" class="bd-talk-video" src="https://player.vimeo.com/video/<?php echo $video_id; ?>" width="100%" height="auto" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    <?php } else{
        //Do nothing 
    } ?>
    </div>
  </div>
</div>
@endwhile
@endsection
