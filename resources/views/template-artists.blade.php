{{--
  Template Name: Artists Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  
  <h1>This is the artists page</h1>

  @endwhile
@endsection