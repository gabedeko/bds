{{--
  Template Name: Artists Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  
  <!--Loop 1: For the 3 posts above the showcase module-->
  <?php 
    $args_0 = array( 
        'orderby' => 'title',
        'order'   => 'DESC',
        'post_type' =>array('artist'),
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
            <h1><i class="fas fa-circle"></i> Artists</h1>
        </div>
        <div class="col-md bd-hero-btm-right">
            
        </div>
    </div>
</div>

<div class="container-fluid">
  <div class="row justify-content-md-center">
      <div class="col-md-12 mt-4">
        @include('partials.content-page')
      </div>
  </div>
</div>

  @endwhile
@endsection