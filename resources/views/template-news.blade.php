{{--
  Template Name: News Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

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
            <h1 class="bd-hero-title"><i class="fas fa-circle"></i> News & Press</h1>
        </div>
        <div class="col-md bd-hero-btm-right">
            
        </div>
    </div>
</div>

  <div class="news-container container-fluid">


  <?php if( have_rows('press_items') ): ?>
    
    <?php while( have_rows('press_items') ): the_row(); 
        $press_title = get_sub_field('press_title');
        $press_img = get_sub_field('press_img');
        $press_link = get_sub_field('press_link');
        ?>
        <a href="<?php the_sub_field('press_link'); ?>" target="_blank" class="news-item reveal" style="background-image:url(<?php echo $press_img['url']; ?>)">
      <div class="news-item-background">
        <h3 class="news-item-title"><?php the_sub_field('press_title'); ?></h3>
        <p class="body-2 news-item-desc">Click to View</p>
      </div>
    </a>
    <?php endwhile; ?>
    
<?php endif; ?>
    <?php /* Original HTML Design 
    <a href="http://blackdancestories.org/wp-content/uploads/2021/01/BDS_and_651_partnership_announcement.pdf" target="_blank" class="news-item reveal" style="background-image:url('http://blackdancestories.org/wp-content/uploads/2021/01/BDS-and-651-announcement-_final-v2-logo_Page_1.jpg')">
      <div class="news-item-background">
        <h3 class="news-item-title">Black Dance Stories and 651 ARTS Partnership</h3>
        <p class="body-2 news-item-desc">Click to View</p>
      </div>
    </a>
    */ ?>
    <?php /* echo the_content(); */ ?>
  </div>
  @endwhile
@endsection
