{{--
  Template Name: Episodes Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="bd-hero bd-contact container-fluid mt-2">
      <div class="row bd-hero-top">
          <div class="col-md-4 bd-hero-top-left">
              <div class="bd-hero-date">
                  <h2><i class="fas fa-circle"></i> Episodes</h2>
              </div>
          </div>
          <div class="col-md-8 bd-hero-top-right" style="background-image:url(@asset('images/placeholder/bd_placeholder_30.jpg'))">
          </div>
      </div>
    </div>
    @include('partials.content-page')


    <div class="container-fluid episodes-container">
        <div class="row episodes-row">
            <div class="col-md episodes-left">
                <h3 class="episodes-title">Title</h3>
                <h5 class="episodes-date">Date</h5>
                <p class="episodes-desc">Phasellus condimentum dui et convallis iaculis. Nulla imperdiet sapien tincidunt odio consequat, a sollicitudin nisi fringilla. In quis suscipit mi. Aenean id enim varius, gravida risus in, egestas eros. Duis dolor lectus, scelerisque a eros ut, vulputate tempus sapien. Suspendisse interdum tempor cursus. Aenean aliquam luctus diam congue iaculis. </p>
            </div>
            <div class="col-md episodes-right" style="background-image:url(@asset('images/placeholder/bd_placeholder_22.jpg'))">

            </div>
        </div>
        <div class="row episodes-row">
            <div class="col-md episodes-left">
                <h3 class="episodes-title">Title</h3>
                <h5 class="episodes-date">Date</h5>
                <p class="episodes-desc">Phasellus condimentum dui et convallis iaculis. Nulla imperdiet sapien tincidunt odio consequat, a sollicitudin nisi fringilla. In quis suscipit mi. Aenean id enim varius, gravida risus in, egestas eros. Duis dolor lectus, scelerisque a eros ut, vulputate tempus sapien. Suspendisse interdum tempor cursus. Aenean aliquam luctus diam congue iaculis. </p>
            </div>
            <div class="col-md episodes-right" style="background-image:url(@asset('images/placeholder/bd_placeholder_7.jpg'))">

            </div>
        </div>
        <div class="row episodes-row">
            <div class="col-md episodes-left">
                <h3 class="episodes-title">Title</h3>
                <h5 class="episodes-date">Date</h5>
                <p class="episodes-desc">Phasellus condimentum dui et convallis iaculis. Nulla imperdiet sapien tincidunt odio consequat, a sollicitudin nisi fringilla. In quis suscipit mi. Aenean id enim varius, gravida risus in, egestas eros. Duis dolor lectus, scelerisque a eros ut, vulputate tempus sapien. Suspendisse interdum tempor cursus. Aenean aliquam luctus diam congue iaculis. </p>
            </div>
            <div class="col-md episodes-right" style="background-image:url(@asset('images/placeholder/bd_placeholder_9.jpg'))">

            </div>
        </div>
        <div class="row episodes-row">
            <div class="col-md episodes-left">
                <h3 class="episodes-title">Title</h3>
                <h5 class="episodes-date">Date</h5>
                <p class="episodes-desc">Phasellus condimentum dui et convallis iaculis. Nulla imperdiet sapien tincidunt odio consequat, a sollicitudin nisi fringilla. In quis suscipit mi. Aenean id enim varius, gravida risus in, egestas eros. Duis dolor lectus, scelerisque a eros ut, vulputate tempus sapien. Suspendisse interdum tempor cursus. Aenean aliquam luctus diam congue iaculis. </p>
            </div>
            <div class="col-md episodes-right" style="background-image:url(@asset('images/placeholder/bd_placeholder_6.jpg'))">

            </div>
        </div>
    </div>
  @endwhile
@endsection
