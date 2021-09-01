@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp

<?php
    /*Variables for custom fields*/
    //$name = get_field('name');
    $photo = get_field('photo');
    $twitter = get_field('twitter');
    $instagram = get_field('instagram');
    $facebook = get_field('facebook');
    $linkedin = get_field('linkedin');
    $desc = get_field('description');
    $title = get_field('artist_title');
    $website = get_field('website');
?>


<div class="bd-hero container-fluid mt-2">
    <div class="row bd-hero-top">
        <div class="col-md-7 bd-hero-top-left">
            <div class="bd-hero-border"></div>
            <div class="bd-hero-date">
                <p class="body-2"><i class="fas fa-circle"></i> Choreographer</p>
            </div>
        </div>
        <div class="col-md-5 bd-hero-top-right" style="background-image:url(@asset('images/ya/young_artist_1.jpg'));">
        
        </div>
    </div>
    <div class="row bd-hero-btm">
        <div class="col-md bd-hero-btm-left">
            <h1 class="bd-hero-title">YA - <?php the_title(); ?></h1>
        </div>
        <div class="col-md bd-hero-btm-right">
            
        </div>
    </div>
</div>

<div class="young-artist-container container-fluid">
  <div class="young-artist-row row">
      <div class="young-artist-left col-md-6">
        <p class="body-2">2. One sentence on why Black Dance Stories is incredibly important to OUR community and the dance community as a whole. I keep going back to our mission.  That ok?</p>
        <p class="body-2">    3.  2-3 facts about you our community wouldn’t know from your bio. I enjoy creating community through my teaching. In my healing practice I also apply the idea of creating community in bringing the aspects of a person together to create peace, acceptance and harmony in themselves which they can then share with others. RJ</p>
        <p class="body-2">
        4. Information about other incredible projects you are currently working on outside of BDS. I just successfully completed co-teaching a course called Consent in Academia for Intimacy Directors and Choreographers and I look forward to more collaborations with them. RJ
        </p>
        
      </div>
      <div class="young-artist-right col-md-6">
        <iframe id="" class="bd-talk-video" width="" height="560" src="https://www.youtube.com/embed/xU5MQaRls80" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
  </div>

  <div class="row justify-content-md-center justify-content-md-center team-profile-social p-5">
    <h1 class="text-center team-profile-social-title mb-5">Social Profiles</h1>
    <div class="col-md team-profile-social-col text-center">
        <h1><a href="https://twitter.com/<?php echo $twitter ?>"><i class="fab fa-twitter" target="_blank"></i></a></h1>
        <h4>Twitter</h4>
    </div>
    <div class="col-md team-profile-social-col text-center">
        <h1><a href="https://www.instagram.com/<?php echo $instagram ?>/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a></h1>
        <h4>Instagram</h4>
    </div>
    <div class="col-md team-profile-social-col text-center">     
        <h1><a href="https://www.facebook.com/<?php echo $facebook ?>/" target="_blank"><i class="fab fa-facebook-f"></i></a></h1>
        <h4>Facebook</h4>
    </div>
  <?php /*
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
  */ ?>
  </div>
</div>
@endwhile
@endsection
