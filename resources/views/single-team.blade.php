@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp

<?php
    /*Variables for custom fields*/
    $photo = get_field('photo');
    $twitter = get_field('twitter');
    $instagram = get_field('instagram');
    $facebook = get_field('facebook');
    $linkedin = get_field('linkedin');
    $desc = get_field('description');
    $title = get_field('team_title');
?>


<div class="bd-hero container-fluid mt-2">
    <div class="row bd-hero-top">
        <div class="col-md-7 bd-hero-top-left">
            <div class="bd-hero-date">
                <p class="body-2"><i class="fas fa-circle"></i> <?php echo $title; ?></p>
            </div>
        </div>
        <div class="col-md-5 bd-hero-top-right" style="background-image:url(<?php echo $photo['url']; ?>)">
        
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
        <?php echo $desc; ?>
      </div>
  </div>
  <div class="row justify-content-md-center mt-5 justify-content-md-center">
  
  </div>
  <div class="row mt-5 justify-content-md-center">
    <div class="col-md-10">

    
    </div>
  </div>
</div>
@endwhile
@endsection
