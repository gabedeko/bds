{{--
  Template Name: About Template
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp

<!--Loop 1: For the 3 posts above the showcase module-->
<?php 
 $args_0 = array( 
    'orderby' => 'title',
    'order'   => 'DESC',
    'post_type' =>array('team'),
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
        <div class="col-md bd-hero-btm-left">
            <h1><i class="fas fa-circle"></i> About</h1>
        </div>
        <div class="col-md bd-hero-btm-right">
            
        </div>
    </div>
</div>

<div class="about-content-container container-fluid">
  <div class="about-content-row row justify-content-md-center">
    
      <div class="about-content-col col-md-8">
        <h2 class="about-title text-center">Our Manifesto</h2>
        @include('partials.content-page')
      </div>
  </div>
  <div class="about-team-row row justify-content-md-center mt-5 mb-5">
    <div class="about-team-col col-md-4">
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
    $website = get_field('website');
    $desc = get_field('description');
    //Crop description at whitespace
    $desc_length = strlen($desc);
    if ( !wp_is_mobile() ) {
        $maxDescLength = 340;
    } else {
        $maxDescLength = 200;
    }
    

    $title = get_field('team_title');
  ?>
 
    <div class="col-md-4 bd-team-item">
        <div class="bd-team-item-background" style="background-image:url(<?php echo $photo['url']; ?>)">
            <div class="bd-team-item-shade">
                <h3 class="bd-team-item-name"><?php echo get_field('name'); ?></h3>
                <h4 class="bd-team-item-title"><?php echo $title; ?></h4>
                <p class="bd-team-item-desc body-3">
                <?php
                //Crop description at whitespace - Line 70
                if ($desc_length > $maxDescLength) {
                    echo substr($desc, 0, strrpos($desc, ' ', $maxDescLength-$desc_length));
                    echo "...";
                } else {
                    echo $thestring;
                }
                ?>
                </p>
                <a href="<?php the_permalink(); ?>" type="button" class="btn bd-btn-2">More</a>
                <div class="bd-team-item-social">
                <?php if ($twitter != null){?>
                    <a class="team-share-icon-link artists-share-icon-link" href="https://twitter.com/<?php echo $twitter ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                    <?php
                } else {} ?>
                <?php if ($instagram != null){?>
                    <a class="team-share-icon-link artists-share-icon-link" href="https://www.instagram.com/<?php echo $instagram ?>/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
                <?php
                } else {} ?>
                <?php if ($facebook != null){?>
                    <a class="team-share-icon-link artists-share-icon-link" href="https://www.facebook.com/<?php echo $facebook ?>/"><i class="fab fa-facebook-f"></i></a>
                <?php
                } else {} ?>
                <?php if ($linkedin != null){?>
                    <a class="team-share-icon-link artists-share-icon-link" href="<?php echo $linkedin ?>"><i class="fab fa-linkedin-in"></i></a>
                <?php 
                } else {} ?>
                 <?php if ($website != null){?>
                    <a class="team-share-icon-link artists-share-icon-link" href="<?php echo $website ?>" target="_blank"><i class="fas fa-globe"></i></a>
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



    
    <?php /*
    <div class="col-md-4 bd-team-item">
        <div class="bd-team-item-background" style="background-image:url(@asset('images/placeholder/bd_placeholder_1.jpg'))">
            <div class="bd-team-item-shade">
                <h3 class="bd-team-item-name">Name</h3>
                <h4 class="bd-team-item-title">Title</h4>
                <p class="bd-team-item-desc body-3">Description</p>
                <p class="bd-team-item-social">Social</p>
            </div>
        </div>
    </div> */ ?>
  </div>
</div>

@endwhile
@endsection
