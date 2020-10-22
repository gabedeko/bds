{{--
  Template Name: Names Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="bd-hero bd-contact container-fluid mt-2">
    <div class="row bd-hero-top">
        <div class="col-md-4 bd-hero-top-left">
            <div class="bd-hero-date">
                <h2><i class="fas fa-circle"></i> We Name the Names</h2>
            </div>
        </div>
        <div class="col-md-8 bd-hero-top-right" style="background-image:url(@asset('images/placeholder/bd_placeholder_33.jpg'))">
        </div>
    </div>
  </div>
  <div class="container-fluid contact-container">
    <div class="row justify-content-end">
      <div class="col-8">
        @include('partials.content-page')
      </div>
    </div>
  </div>
  @endwhile
@endsection
