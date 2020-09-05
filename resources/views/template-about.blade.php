{{--
  Template Name: About Template
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp

<!--Loop 1: For the 3 posts above the showcase module-->
<?php 
 $args_0 = array( 
    'orderby' => 'ID',
    'post_type' =>array('team'),
    'post_status' => 'publish',
    'posts_per_page' => 20,
 );
 $the_query_0 = new WP_Query( $args_0 );

 $query_item_num_1 = 0;

?>

<div class="bd-hero container-fluid mt-2">
    <div class="row bd-hero-top">
        <div class="col-md-4 bd-hero-top-left">
        <div class="bd-hero-date"></div>
        </div>
        <div class="col-md-8 bd-hero-top-right" style="background-image:url(@asset('images/placeholder/bd_placeholder_11.jpg'))">
        
        </div>
    </div>
    <div class="row bd-hero-btm">
        <div class="col-md bd-hero-btm-left">
            <h1>About</h1>
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
        @include('partials.content-page')
      </div>
  </div>
  <div class="row justify-content-md-center mt-5 mb-5">
    <div class="col-md-4">
       <h1 class="text-center">Our Team</h1>
    </div>
  </div>
  <div class="row mt-5 justify-content-md-center bd-team-section g-2">

  <?php if ( $the_query_0->have_posts() ) : while ( $the_query_0->have_posts() ) : $the_query_0->the_post();

    $photo = get_field('photo');
    $twitter = get_field('twitter');
    $instagram = get_field('instagram');
    $facebook = get_field('facebook');
    $linkedin = get_field('linkedin');
  ?>
 
    <div class="col-md-4 bd-team-item">
        <div class="bd-team-item-background" style="background-image:url(<?php echo $photo['url']; ?>)">
            <div class="bd-team-item-shade">
                <h3 class="bd-team-item-name"><?php echo get_field('name'); ?></h3>
                <h4 class="bd-team-item-title"><?php echo get_field('team_title'); ?></h4>
                <p class="bd-team-item-desc body-3"><?php echo get_field('description'); ?></p>
                <div class="bd-team-item-social">
                <?php if ($twitter != null){?>
                    <a class="share-icon-link team-share-icon-link" href="#"><i class="fab fa-twitter"></i></a>
                    <?php
                } else {} ?>
                <?php if ($instagram != null){?>
                    <a class="share-icon-link team-share-icon-link" href="#"><i class="fab fa-instagram"></i></a>
                <?php
                } else {} ?>
                <?php if ($facebook != null){?>
                    <a class="share-icon-link team-share-icon-link" href="#"><i class="fab fa-facebook-f"></i></a>
                <?php
                } else {} ?>
                <?php if ($linkedin != null){?>
                    <a class="share-icon-link team-share-icon-link" href="#"><i class="fab fa-linkedin-in"></i></a>
                <?php
                } else {} ?>
                </div>
            </div>
        </div>
    </div>
    <?php 
    $query_item_num_1++;
    ?>
    <?php endwhile; else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
  <?php wp_reset_query(); ?>



    

    <div class="col-md-4 bd-team-item">
        <div class="bd-team-item-background" style="background-image:url(@asset('images/placeholder/bd_placeholder_1.jpg'))">
            <div class="bd-team-item-shade">
                <h3 class="bd-team-item-name">Name</h3>
                <h4 class="bd-team-item-title">Title</h4>
                <p class="bd-team-item-desc body-3">Description</p>
                <p class="bd-team-item-social">Social</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 bd-team-item">
        <div class="bd-team-item-background" style="background-image:url(@asset('images/placeholder/bd_placeholder_15.jpg'))">
            <div class="bd-team-item-shade">
                <h3 class="bd-team-item-name">Name</h3>
                <h4 class="bd-team-item-title">Title</h4>
                <p class="bd-team-item-desc body-3">Description</p>
                <p class="bd-team-item-social">Social</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 bd-team-item">
        <div class="bd-team-item-background" style="background-image:url(@asset('images/placeholder/bd_placeholder_21.jpg'))">
            <div class="bd-team-item-shade">
                <h3 class="bd-team-item-name">Name</h3>
                <h4 class="bd-team-item-title">Title</h4>
                <p class="bd-team-item-desc body-3">Description</p>
                <p class="bd-team-item-social">Social</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 bd-team-item">
        <div class="bd-team-item-background" style="background-image:url(@asset('images/placeholder/bd_placeholder_16.jpg'))">
            <div class="bd-team-item-shade">
                <h3 class="bd-team-item-name">Name</h3>
                <h4 class="bd-team-item-title">Title</h4>
                <p class="bd-team-item-desc body-3">Description</p>
                <p class="bd-team-item-social">Social</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 bd-team-item">
        <div class="bd-team-item-background" style="background-image:url(@asset('images/placeholder/bd_placeholder_13.jpg'))">
            <div class="bd-team-item-shade">
                <h3 class="bd-team-item-name">Name</h3>
                <h4 class="bd-team-item-title">Title</h4>
                <p class="bd-team-item-desc body-3">Description</p>
                <p class="bd-team-item-social">Social</p>
            </div>
        </div>
    </div>
  </div>
</div>

@endwhile
@endsection
