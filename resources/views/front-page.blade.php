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

    <?php /*
    <!--script>    
     var audio = new Audio('./wp-content/themes/black_dance/resources/bds_intro.mp3');
     audio.play();
    </script-->
    */ ?>
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
                <p class="body-2"><i class="fas fa-circle"></i> <?php the_date('l, F j, Y'); ?></p>
            <?php endwhile; else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
            <?php wp_reset_query(); ?>
                <?php /*<p class="body-2"><i class="fas fa-circle"></i> January 25, 2018</p>*/ ?>
            </div>
        </div>
        <div class="col-md-8 bd-hero-top-right multiple-items">
            <?php if ( $the_query_1->have_posts() ) : while ( $the_query_1->have_posts() ) : $the_query_1->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="bd-hero-top-right-bg" style="background-image:url(
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


<?php /*
    <a href="#" class="col-md-4 bd-mod-1-item">
      <div class="bd-mod-1-top">
          <div class="bd-mod-1-top-img" style="background-image:url(@asset('images/placeholder/bd_placeholder_20.jpg'))"></div>
      </div>
      <div class="bd-mod-1-btm">
          <p class="body-2"><i class="fas fa-circle"></i> March 20-22, 2020</p>
          <p class="body-1">Janet Collins, Steeple Chase</p>
      </div>
    </a>
    <div class="col-md-8 bd-mod-2-left">
            <div class="bd-mod-2-left-top">
                <p class="body-2"><i class="fas fa-circle"></i> May 27-30, 2011</p>
                <p class="body-1">Rhapsody James, Alrighty</p>
            </div>
            <div class="bd-mod-2-left-btm">
                <div class="bd-mod-2-left-img" style="background-image:url(@asset('images/placeholder/bd_placeholder_25.jpg'))"></div>
            </div>
        </div>
  </div>
*/ ?>
    </div>
</div>


<?php /*
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
*/ ?>
<div class="container-fluid engage-container mt-5 mb-5">
    <div class="row engage-row">
        <div class="col-md-4 engage-col">
            <h3 class="engage-title mt-2 mb-2">Join Our Newsletter</h3>
            <i class="engage-icon fas fa-paper-plane"></i>
            <p class="body-2 engage-copy mt-4 mb-4"> Join our mailing list to get weekly updates on our programs, screenings and special events</p>
            <a href="https://vr2.verticalresponse.com/s/websitesignupform40681930229779" target="_blank"><button type="button" class="btn bd-btn-3">Join Newsletter</button></a>
        </div>
        <div class="col-md-4 engage-col">
            <h3 class="engage-title mt-2 mb-2">Donate</h3>
            <i class="engage-icon fas fa-donate"></i>
            <p class="body-2  engage-copy mt-4 mb-4">We appreciate any amount you can offer to the BDS team</p>
            <a href="https://linktr.ee/blackdancestories" target="_blank"><button type="button" class="btn bd-btn-3">Donate</button></a>
        </div>
        <div class="col-md-4 engage-col">
            <h3 class="engage-title mt-2 mb-2">Become a Patron</h3>
            <i class="engage-icon fab fa-patreon"></i>
            <p class="body-2  engage-copy mt-4 mb-4"> Subscribe and support our Patreon for much more exclusive content</p>
            <a href="https://www.patreon.com/blackdancestories" target="_blank"><button type="button" class="btn bd-btn-3">Visit Patreon</button></a>
        </div>
</div>
</div>
<?php /*
<div class="container-fluid join-us-container">
    <div class="row">
        <div class="col-md join-us-left">
            <h2 class="join-us-left-title">Join Us</h2>
            <p class="body-2 join-us-left-copy"> Join our mailing list to get weekly updates on our programs, screenings and special events</p>
        </div>
        <div class="col-md join-us-right">
            <div class="join-us-right-input">
            <?php
                    echo get_field( 'newsletter_signup' );
            ?>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid donate-container">
    <div class="row">
        <div class="col-md join-us-left">
            <h2 class="join-us-left-title">Donate</h2>
            <p class="body-2 join-us-left-copy"> Please donate to BDS. We appreciate any amount you can offer.</p>
        </div>
        
        <div class="col-md patreon-right">
            <div class="patreon-right-input">
                <a href="https://linktr.ee/blackdancestories" target="_blank"></a><button type="button" class="btn bd-btn-1">Donate</button>
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
*/ ?>

@endsection