@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp

<?php 
    //Get All artists who were a part of the episode
    //Link to their profiles at bottom of page
    $episode_number = 'episode_' . get_field('episode_number');
    $args_0 = array( 
        'orderby' => 'ID',
        'post_type' =>array('artist'),
        'post_status' => 'publish',
        'posts_per_page' => 20,
        'tag'   => $episode_number,
    );
    $the_query_0 = new WP_Query( $args_0 );
    $query_item_num_1 = 0;
    ?>


<div class="bd-hero container-fluid mt-2">
    <div class="row bd-hero-top bd-hero-top-talk">
        <div class="col-md-4 bd-hero-top-left">
            <div class="bd-hero-border"></div>
            <div class="bd-hero-date">
                <p class="body-2"><i class="fas fa-circle"></i> <?php the_date('l, F j, Y'); ?></p>
            </div>
        </div>
        <div class="col-md-8 bd-hero-top-right" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
        
        </div>
    </div>
    <div class="row bd-hero-btm">
        <div class="col-md bd-hero-btm-left">
            <h1 class="bd-hero-title"><?php the_title(); ?></h1>
        </div>
        <div class="col-md bd-hero-btm-right">
            <div class="hero-share">
                <h4>SHARE:
                <a class="hero-share-link" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?> <?php echo site_url();  the_permalink(); ?>  " target="_blank"><i class="fab fa-twitter"></i></a>
                <a class="hero-share-link fb-share-button" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" data-layout="button_count" ><i class="fab fa-facebook-square" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small"></i></a>
                </h4>
            </div>
        </div>
    </div>
</div>

<div class="talk-content-container container-fluid">
    <div class="talk-video-row row mb-5 justify-content-md-center">
        <?php
                $video_type = get_field('video_type');
                $video_id = get_field('video_id');
        ?>
        

        <?php if ($video_type == 'youtube'){ ?>
            <div class="talk-video-col col-md-10">
                <iframe id="" class="bd-talk-video" width="" height="560" src="https://www.youtube.com/embed/<?php echo $video_id; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> 
        <?php } else if  ($video_type == 'vimeo') { ?>
            <div class="talk-video-col col-md-10">
                <iframe id="" class="bd-talk-video" src="https://player.vimeo.com/video/<?php echo $video_id; ?>" width="100%" height="auto" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div> 
        <?php } else{
            //Do nothing 
        } ?>
        
    </div>
  <div class="talk-content-row row justify-content-md-center">
      <?php 
        if( '' !== get_post()->post_content ) {
            ?>
                <div class="talk-content-col col-md-9">
                    <?php echo the_content(); ?>
                </div>
            <?php
            }
      ?>
      
  </div>
  <div class="row justify-content-md-center mt-5 justify-content-md-center">
  <?php
    //Check if "show announcement" checkbox is checked
    $image = get_field('image');
    if($image){ ?>
    <div class="col-md-6 talk-image-2">
        <img src="<?php echo $image['url'] ?>" alt="">
    </div>
    <?php } ?>
  </div>
</div>
<div class="talk-artist-container container-fluid">
  <div class="row mt-5 justify-content-md-center bd-artists-section g-2">    
  <?php if ( $the_query_0->have_posts() ) : while ( $the_query_0->have_posts() ) : $the_query_0->the_post();
    ?>
    <?php
    /*Variables for custom fields*/
    $photo = get_field('photo');
    $twitter = get_field('twitter');
    $instagram = get_field('instagram');
    $facebook = get_field('facebook');
    $linkedin = get_field('linkedin');
    $website = get_field('website');
    $desc = get_field('description');
    //Crop description at whitespace
    $desc_length = strlen($desc);
    $maxDescLength = 340;
    $title = get_field('artist_title');
    ?>
        <div class="col-md-4 bd-artists-item">
        <div class="bd-artists-item-background" style="background-image:url(<?php echo $photo['url']; ?>)">
            <div class="bd-artists-item-shade">
                <h3 class="bd-artists-item-name"><?php the_title(); ?></h3>
                <h4 class="bd-artists-item-title"><?php echo $title; ?></h4>
                <p class="bd-artists-item-desc body-3">
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
                <div class="bd-artists-item-social">
                <?php if ($twitter != null){?>
                    <a class="share-icon-link artists-share-icon-link" href="https://twitter.com/<?php echo $twitter ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                    <?php
                } else {} ?>
                <?php if ($instagram != null){?>
                    <a class="share-icon-link artists-share-icon-link" href="https://www.instagram.com/<?php echo $instagram ?>/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
                <?php
                } else {} ?>
                <?php if ($facebook != null){?>
                    <a class="share-icon-link artists-share-icon-link" href="https://www.facebook.com/<?php echo $facebook ?>/"><i class="fab fa-facebook-f"></i></a>
                <?php
                } else {} ?>
                <?php if ($linkedin != null){?>
                    <a class="share-icon-link artists-share-icon-link" href="<?php echo $linkedin ?>"><i class="fab fa-linkedin-in"></i></a>
                <?php 
                } else {} ?>
                 <?php if ($website != null){?>
                    <a class="share-icon-link artists-share-icon-link" href="<?php echo $website ?>" target="_blank"><i class="fas fa-globe"></i></a>
                <?php
                } else {} ?>
                </div>
            </div>
        </div>
    </div>

    <?php 
    $query_item_num_1++;
    ?>
    <?php endwhile; else: ?> <p></p> <?php endif; ?>
    <?php wp_reset_query(); ?>
@endwhile
@endsection
