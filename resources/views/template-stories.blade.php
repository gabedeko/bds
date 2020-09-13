{{--
  Template Name: Stories Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    

  <div class="bd-hero bd-contact container-fluid mt-2">
    <div class="row bd-hero-top">
        <div class="col-md-4 bd-hero-top-left">
            <div class="bd-hero-date">
                <h2><i class="fas fa-circle"></i> Your Stories</h2>
            </div>
        </div>
        <div class="col-md-8 bd-hero-top-right" style="background-image:url(@asset('images/placeholder/bd_placeholder_11.jpg'))">
        </div>
    </div>
  </div>
  <div class="container-fluid stories-container">
    <div class="row justify-content-end">
      <div class="col-8">
        @include('partials.content-page')
      </div>
    </div>
    <div class="row stories-row">
        <div class="col-md-6 stories-left">
          <h3>Name</h3>
          <h4>Location</h4>
          <p>Donec id lobortis ipsum, a lobortis dolor. Quisque augue est, ultrices non interdum sed, elementum et lacus. Maecenas vel convallis odio. Nunc ultricies tortor massa, at ultricies ligula vehicula in.</p>
        </div>
        <div class="col-md-6 stories-right">
          <div class="stories-img" style="background-image:url(@asset('images/placeholder/bd_placeholder_27.jpg'))"></div>
        </div>
    </div>
    <div class="row stories-row">
        <div class="col-md-6 stories-left">
          <h3>Name</h3>
          <h4>Location</h4>
          <p>Donec id lobortis ipsum, a lobortis dolor. Quisque augue est, ultrices non interdum sed, elementum et lacus. Maecenas vel convallis odio. Nunc ultricies tortor massa, at ultricies ligula vehicula in.</p>
        </div>
        <div class="col-md-6 stories-right">
          <div class="stories-img" style="background-image:url(@asset('images/placeholder/bd_placeholder_17.jpg'))"></div>
        </div>
    </div>
    <div class="row stories-row">
        <div class="col-md-6 stories-left">
          <h3>Name</h3>
          <h4>Location</h4>
          <p>Donec id lobortis ipsum, a lobortis dolor. Quisque augue est, ultrices non interdum sed, elementum et lacus. Maecenas vel convallis odio. Nunc ultricies tortor massa, at ultricies ligula vehicula in.</p>
        </div>
        <div class="col-md-6 stories-right">
          <div class="stories-img" style="background-image:url(@asset('images/placeholder/bd_placeholder_22.jpg'))"></div>
        </div>
    </div>
    <div class="row stories-row">
        <div class="col-md-6 stories-left">
          <h3>Name</h3>
          <h4>Location</h4>
          <p>Donec id lobortis ipsum, a lobortis dolor. Quisque augue est, ultrices non interdum sed, elementum et lacus. Maecenas vel convallis odio. Nunc ultricies tortor massa, at ultricies ligula vehicula in.</p>
        </div>
        <div class="col-md-6 stories-right">
          <div class="stories-img" style="background-image:url(@asset('images/placeholder/bd_placeholder_15.jpg'))"></div>
        </div>
    </div>
    <div class="row stories-form-row justify-content-center">
      <div class="col-md-8">
          <?php
                    echo get_field( 'add_story' );
            ?>
      </div>
    </div>
  </div>

  @endwhile
@endsection
