@extends('layouts.app')

@section('content')


<?php 
//Query for loop under slide
 $args_0 = array( 
    'orderby' => 'ID',
    'post_type' =>array('talk','young_professional'), //add ,'young_professional'
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'offset' => 3,
    "orderby" => "date",
    "order" => 'DESC',
 );
 $the_query_0 = new WP_Query( $args_0 );

 $query_item_num_0 = 0;

//Query for slide
$args_1 = array( 
    'orderby' => 'ID',
    'post_type' =>array('talk','young_professional'), //add ,'young_professional'
    'post_status' => 'publish',
    'posts_per_page' => 3,
    "orderby" => "date",
    "order" => 'DESC',
 );
 $the_query_1 = new WP_Query( $args_1 );

 $query_item_num_1 = 0;

?>


<?php
/* We don't want to load the progress elements if site is mobile */
if ( !wp_is_mobile() ) { //Desktop
    ?>
    <div id="loader">
    <div class="spinner">
        <div class="spinner-logo"><img class="spinner-logo-img" src="@asset('images/logo/bds_logo.jpg')"></div>
        <!--div class="spinner-text">Loading</div-->
        <div class="spinner-sector spinner-sector-red"></div>
        <div class="spinner-sector spinner-sector-blue"></div>
        <div class="spinner-sector spinner-sector-green"></div>
      </div>
    
    </div>

    <div id="progress-screen"></div>


    <?php
} else { //Mobile
    //Do nothing
}

?>



<?php
//Check if "show announcement" checkbox is checked
$show_newsletter = get_field('show');
if( $show_newsletter && in_array('Show Announcement', $show_newsletter) ) { ?>
    <div class="announcement-container container-fluid mt-3 mb-3">
    <div class="row justify-content-md-center">
        <div class="col-md-5 announcement-left mt-2 mb-2">
            <h3 class="mt-2">Announcements</h3>
        </div>
        <div class="col-md-5 announcement-right mt-2 mb-2">
            <div class="announcement-right-top">
                <p>
                    <?php
                        echo get_field( 'announcement' );
                    ?>
                </p>
            </div>
            <div class="announcement-right-btm">
                <p class="body-2">
                    <?php
                        echo get_field( 'announcement_subtitle' );
                    ?>
                    </p>
                <a href="
                <?php
                        echo get_field( 'announcement_link' );
                    ?>
                    " target="_blank"><button type="button" class="btn btn-lg bd-btn-1">
                    <?php
                        echo get_field( 'announcement_link_msg' );
                    ?>
                </button></a>
            </div>
            
        </div>
    </div>
</div>
<?php
}
?>

<div class="bd-hero container-fluid mt-2">
    <div class="row bd-hero-top bd-hero-top-home">
        <div class="col-md-4 bd-hero-top-left">
            <div class="bd-hero-border"></div>
            <div class="bd-hero-date">
            <?php if ( $the_query_1->have_posts() ) : while ( $the_query_1->have_posts() ) : $the_query_1->the_post(); ?>
            <?php
                //If there is a future Live event date, ge that date
                $bds_live_date = get_field('bds_live_date');
            ?>
                <p class="body-2"><i class="fas fa-circle"></i> 
                <?php
                    //If there is a future Live event date, dispay that instead of post date
                    if ($bds_live_date != null){
                        echo $bds_live_date;
                    }
                    else {
                        the_date('l, F j, Y'); 
                    }                  
                ?>
                </p>
            <?php endwhile; else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
            <?php wp_reset_query(); ?>
                <?php /*<p class="body-2"><i class="fas fa-circle"></i> January 25, 2018</p>*/ ?>
            </div>
        </div>
        <div class="col-md-8 bd-hero-top-right multiple-items">
            <?php if ( $the_query_1->have_posts() ) : while ( $the_query_1->have_posts() ) : $the_query_1->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="bd-hero-top-right-bg 
                <?php
                if ( 'talk' == get_post_type() ) {
                    ?>
                    bd-hero-talk-bg
                    <?php
                } elseif ( 'young_professional' == get_post_type() ) {
                    ?>
                    bd-hero-young-professional-bg
                    <?php
                }
                ?>
                
                " style="background-image:url(
                    <?php 
                    if ( has_post_thumbnail() ) {
                        echo get_the_post_thumbnail_url(get_the_ID(),'full');
                    } else {
                        $yp_photo = get_field('photo');
                        echo esc_url($yp_photo['url']);
                    }
                    ?>
                    )"></a>
            <?php endwhile; else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
            <?php wp_reset_query(); ?>
                <?php /*<a href="/talk/talk-test" class="bd-hero-top-right-bg" style="background-image:url(@asset('images/placeholder/bd_placeholder_8.jpg'))"></a> */ ?>
        </div>
    </div>
    <div class="row bd-hero-btm">
        <div class="col-md bd-hero-btm-left multiple-items-for">
            <?php if ( $the_query_1->have_posts() ) : while ( $the_query_1->have_posts() ) : $the_query_1->the_post(); ?>
                <h1 class="hero-title"><a class="hero-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <?php endwhile; else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
            <?php wp_reset_query(); ?>
            <?php /*<h1 class="hero-title"><a class="hero-link" href="/talk/talk-test">Interesting Talk</a></h1>*/ ?>
            
        </div>
        <div class="col-md bd-hero-btm-right">
        </div>
    </div>
</div>

<div class="container-fluid community-container">
    <div class="community-row row justify-content-md-center">
        <div class="col-md col-md-10 community-col">
            <h1 class="community-title">Our Mission</h1>
            <p class="body-1 community-copy mb-5">

            <?php
                        echo get_field( 'community_message' );
                    ?>
            </p>
        </div>
    </div>
</div>


<div class="bd-mod-1 container-fluid mb-3 mt-5">
  <div class="row">
  <?php if ( $the_query_0->have_posts() ) : while ( $the_query_0->have_posts() ) : $the_query_0->the_post();
?>
    <a href="<?php the_permalink(); ?>" class="col-md-4 bd-mod-1-item">
      <div class="bd-mod-1-top">
          <div class="bd-mod-1-top-img" style="background-image:url(
              <?php

                if ( has_post_thumbnail() ) {
                    echo get_the_post_thumbnail_url(get_the_ID(),'full');
                } else {
                    $yp_photo = get_field('photo');
                    echo esc_url($yp_photo['url']);
                }
                ?>
           )"></div>
      </div>
      <div class="bd-mod-1-btm">
          <p class="body-2"><i class="fas fa-circle"></i> <?php the_date('l, F j, Y'); ?></p>
          <p class="body-1"><?php the_title(); ?></p>
      </div>
    </a>

    <?php 
    $query_item_num_0++;
    ?>
    <?php endwhile; else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
    <?php wp_reset_query(); ?>
    <?php
    if ( $query_item_num_0 > 2 ){
    ?>
        <div class="all-talks-btn">
            <a href="/episodes"><button type="button" class="btn btn-lg bd-btn-1">All Episodes</button></a>
        </div>
    <?php
    }
    ?>

    </div>
</div>

<div class="container-fluid engage-container mt-5 mb-5">
    <div class="row engage-row">
        <div class="col-md-6 engage-col">
            <h3 class="engage-title mt-2 mb-2">Join Our Newsletter</h3>
            <i class="engage-icon fas fa-paper-plane"></i>
            <p class="body-2 engage-copy mt-4 mb-4"> Join our mailing list to get weekly updates on our programs, screenings and special events</p>
            <a href="https://vr2.verticalresponse.com/s/websitesignupform40681930229779" target="_blank"><button type="button" class="btn bd-btn-3">Join Newsletter</button></a>
        </div>
        <div class="col-md-6 engage-col">
            <h3 class="engage-title mt-2 mb-2">Donate</h3>
            <i class="engage-icon fas fa-donate"></i>
            <p class="body-2  engage-copy mt-4 mb-4">We appreciate any amount you can offer to the BDS team</p>
            <a href="https://linktr.ee/blackdancestories" target="_blank"><button type="button" class="btn bd-btn-3">Donate</button></a>
        </div>
        
</div>
</div>

<style>
    @media only screen and (min-width: 991.98px) {
        .bd-hero-top-right {
            width: 556px!important;
            height: 191px!important;
        }
        .bd-hero-top-home {
            align-items: center;
        }
    }
</style>

@endsection