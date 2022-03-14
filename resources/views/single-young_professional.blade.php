@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp

<?php
    /*Variables for custom fields*/
    //$name = get_field('name');
    $yp_desc = get_field('yp_desc');
    $power_half_hour = get_field('power_half_hour');
    $pronouns = get_field('pronouns');
    $photo = get_field('photo');
    $project = get_field('project');
    $share_story_media = get_field('share_story_media');
    $share_story_text = get_field('share_story_text');
    $power_half_hour_video = get_field('power_half_hour_video');
?>


<div class="bd-hero container-fluid mt-2">
    <div class="row bd-hero-top">
        <div class="col-md-7 bd-hero-top-left">
            <div class="bd-hero-border"></div>
            <div class="bd-hero-date">
                <p class="body-2"><i class="fas fa-circle"></i> <?php echo $pronouns ?></p>
            </div>
        </div>
        <div class="col-md-5 bd-hero-top-right" style="background-image:url(<?php echo esc_url($photo['url']) ?>);">
        
        </div>
    </div>
    <div class="row bd-hero-btm">
        <div class="col-md bd-hero-btm-left">
            <h5 class="bd-hero-title">Young  Professionals</h5>
            <h1 class="bd-hero-title"><?php the_title(); ?></h1>
        </div>
    </div>
</div>

<div class="young-artist-container container-fluid">
<?php if ($power_half_hour == "yes" ){
    ?>

  <div class="young-artist-phh-video-row row mb-5">
  <?php if ($power_half_hour_video != null ){
    ?>
        <div class="young-artist-phh-video col-md align-items-center mb-3">
        <iframe id="" class="bd-talk-video" width="" height="560" src="https://www.youtube.com/embed/<?php echo $power_half_hour_video ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <?php
    } else {
    ?>
        <a class="phh-placeholder-link" href="https://www.instagram.com/blackdancestories/" target="_blank">
            <img class="phh-placeholder-img" src="http://blackdancestories.org/wp-content/uploads/2021/11/2.png" alt="" >
        </a>
    <?php
    }
    ?>
  </div>
  <div class="young-artist-phh-desc-row row">
      <div class="young-artist-phh-desc-col col-md">
        <p class="young-artist-phh-desc"><?php echo $yp_desc ?></p>
      </div>
      
  </div>
    <?php
}
?>
<?php if ($project) { ?>
    <hr class="bd-hr-0">
    <div class="row young-artist-project-row mt-4">
    
        <h5 class="">Project</h5>
        <h2><?php echo $project ?></h2>
    
        <?php
        if ($share_story_media) { ?>
        <div class="share-story-media"></div>
        
            <img src="<?php echo esc_url($share_story_media['url']); ?>" alt="">
        <?php
        }
        ?> 
        <?php
        if ($share_story_text) { ?>
        <div class="share-story-text mt-4"></div>
        <?php
            echo $share_story_text;
        }
        ?>
    </div>
<?php } ?>
  
  <div class="row justify-content-md-center justify-content-md-center team-profile-social young-artist-social-row p-5">
  <?php 
    $twitter = get_field('twitter');
    $instagram = get_field('instagram');
    $facebook = get_field('facebook');
    $linkedin = get_field('linkedin');
    $website = get_field('website');
    
        if( ! $twitter && ! $instagram && ! $facebook && ! $linkedin && ! $website ){
            
        } else {
            ?>
                <h1 class="text-center team-profile-social-title mb-5">Social Profiles</h1>
            <?php
        }
        ?>
        <?php 
        if( $twitter) {
            ?>
            <div class="col-md team-profile-social-col text-center">
                <h1><a href="https://twitter.com/<?php echo $twitter ?>"><i class="fab fa-twitter" target="_blank"></i></a></h1>
                <h4>Twitter</h4>
            </div>
            <?php
        }
        if( $instagram) {
            ?>
            <div class="col-md team-profile-social-col text-center">
                <h1><a href="https://www.instagram.com/<?php echo $instagram ?>/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a></h1>
                <h4>Instagram</h4>
            </div>
            <?php
        }
        if( $facebook) {
            ?>
            <div class="col-md team-profile-social-col text-center">     
                <h1><a href="https://www.facebook.com/<?php echo $facebook ?>/" target="_blank"><i class="fab fa-facebook-f"></i></a></h1>
                <h4>Facebook</h4>

            </div>
            <?php
        }
        if( $linkedin) {
            ?>
            <div class="col-md team-profile-social-col text-center">
                <h1><a href="<?php echo $linkedin ?>"  target="_blank"><i class="fab fa-linkedin-in"></i></h1>
                <h4>LinkedIn</h4>
            </div>
            <?php
        }
        if( $website) {
            ?>
            <div class="col-md team-profile-social-col text-center">
                <h1><a href="<?php echo $website ?>"  target="_blank"><i class="fas fa-globe"></i></a></h1>
                <h4>Website</h4>
            </div>
            <?php
        }
   ?>

  
  </div>
</div>
@endwhile
@endsection
