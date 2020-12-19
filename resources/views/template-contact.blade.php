{{--
  Template Name: Contact Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <div class="bd-hero bd-hero-2 bd-contact container-fluid mt-2">
    <div class="row bd-hero-top">
        <div class="col-md-4 bd-hero-top-left">
          <div class="bd-hero-border"></div>
            <div class="bd-hero-date">
                <h2><i class="fas fa-circle"></i> Contact</h2>
            </div>
        </div>
        <?php /*
        <div class="col-md-8 bd-hero-top-right" style="background-image:url(@asset('images/placeholder/bd_placeholder_23.jpg'))">
        </div>
        */ ?>
    </div>
  </div>
  <div class="contact-content-container container-fluid contact-container">
    <div class="contact-content-row row justify-content-end">
      <div class="contact-content-col-left col-4 d-flex align-items-center justify-content-center">
        <div class="bd-contact-info">
          <p>Email: <a href="mailto:blackdancestories@gmail.com">blackdancestories@gmail.com</a></p>
        </div>
        
      </div>
      <div class="contact-content-col-right col-8">
        @include('partials.content-page')
      </div>
    </div>
  </div>
  @endwhile
@endsection
