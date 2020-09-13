{{--
  Template Name: Artists Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  
  <!--Loop 1: For the 3 posts above the showcase module-->
<?php 
/*
 $args_0 = array( 
    'orderby' => 'ID',
    'post_type' =>array('team'),
    'post_status' => 'publish',
    'posts_per_page' => 20,
 );
 $the_query_0 = new WP_Query( $args_0 );

 $query_item_num_1 = 0;
*/
?>

<div class="bd-hero container-fluid mt-2">
    <div class="row bd-hero-top">
        <div class="col-md-4 bd-hero-top-left">
        <div class="bd-hero-date"></div>
        </div>
        <div class="col-md-8 bd-hero-top-right" style="background-image:url(@asset('images/placeholder/bd_placeholder_29.jpg'))">
        
        </div>
    </div>
    <div class="row bd-hero-btm">
        <div class="col-md bd-hero-btm-left">
            <h1>Artists</h1>
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
  <div class="row mt-5 justify-content-md-center bd-artists-section g-2">    

    <div class="col-md-4 bd-artists-item">
        <div class="bd-artists-item-background" style="background-image:url(@asset('images/placeholder/bd_placeholder_23.jpg'))">
            <div class="bd-artists-item-shade">
                <h3 class="bd-artists-item-name">Name</h3>
                <h4 class="bd-artists-item-title">Title</h4>
                <p class="bd-artists-item-desc body-3">Description</p>
                <p class="bd-artists-item-social">Social</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 bd-artists-item">
        <div class="bd-artists-item-background" style="background-image:url(@asset('images/placeholder/bd_placeholder_15.jpg'))">
            <div class="bd-artists-item-shade">
                <h3 class="bd-artists-item-name">Name</h3>
                <h4 class="bd-artists-item-title">Title</h4>
                <p class="bd-artists-item-desc body-3">Description</p>
                <p class="bd-artists-item-social">Social</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 bd-artists-item">
        <div class="bd-artists-item-background" style="background-image:url(@asset('images/placeholder/bd_placeholder_0.jpg'))">
            <div class="bd-artists-item-shade">
                <h3 class="bd-artists-item-name">Name</h3>
                <h4 class="bd-artists-item-title">Title</h4>
                <p class="bd-artists-item-desc body-3">Description</p>
                <p class="bd-artists-item-social">Social</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 bd-artists-item">
        <div class="bd-artists-item-background" style="background-image:url(@asset('images/placeholder/bd_placeholder_31.jpg'))">
            <div class="bd-artists-item-shade">
                <h3 class="bd-artists-item-name">Name</h3>
                <h4 class="bd-artists-item-title">Title</h4>
                <p class="bd-artists-item-desc body-3">Description</p>
                <p class="bd-artists-item-social">Social</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 bd-artists-item">
        <div class="bd-artists-item-background" style="background-image:url(@asset('images/placeholder/bd_placeholder_26.jpg'))">
            <div class="bd-artists-item-shade">
                <h3 class="bd-artists-item-name">Name</h3>
                <h4 class="bd-artists-item-title">Title</h4>
                <p class="bd-artists-item-desc body-3">Description</p>
                <p class="bd-artists-item-social">Social</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 bd-artists-item">
        <div class="bd-artists-item-background" style="background-image:url(@asset('images/placeholder/bd_placeholder_4.jpg'))">
            <div class="bd-artists-item-shade">
                <h3 class="bd-artists-item-name">Name</h3>
                <h4 class="bd-artists-item-title">Title</h4>
                <p class="bd-artists-item-desc body-3">Description</p>
                <p class="bd-artists-item-social">Social</p>
            </div>
        </div>
    </div>
  </div>
</div>

  @endwhile
@endsection