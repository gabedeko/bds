{{--
  Template Name: Calendar Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="bd-calendar-header container-fluid mt-2">
    <div class="row justify-content-between">
        <div class="col-md col-md-7 calendar-title-section">
            <h2 class="calendar-title">Calendar | Upcoming Events</h2>
        </div>
        <div class="col-md col-md-3">
          <div class="date-filter">
            <h4>Date</h4>
          </div>
          <div class="calendar-search">

          </div>
        </div>
    </div>
  </div>

  <div class="container-fluid calendar-upcoming-title">
    <div class="row">
      <h3>Upcoming</h3>
    </div>
  </div>

  <div class="container-fluid calendar-container calendar-upcoming">
    <div class="row">
      <div class="col-md-4 calendar-date">
        <h4>Saturday</h4>
        <p class="body-1">01</p>
      </div>
      <div class="col-md calendar-item">
        <div class="calendar-item-top">
          <h5>7:00 pm</h5>
          <p class="body-2">Vestibulum feugiat feugiat enim</p>
        </div>
        <div class="calendar-item-btm" style="background-image:url(@asset('images/placeholder/bd_placeholder_1.jpg'))"></div>
      </div>
      <div class="col-md calendar-item">
        <div class="calendar-item-top">
          <h5>8:00 pm</h5>
          <p class="body-2">Vestibulum feugiat feugiat enim</p>
          <p class="body-3">Directed by Jane Doe</p>
        </div>
        <div class="calendar-item-btm" style="background-image:url(@asset('images/placeholder/bd_placeholder_9.jpg'))"></div>
      </div>
      <div class="col-md calendar-item">
        <div class="calendar-item-top">
          <h5>9:00 pm</h5>
          <p class="body-2">Vestibulum feugiat feugiat enim</p>
          <p class="body-3">Directed by Jane Doe</p>
        </div>
        <div class="calendar-item-btm" style="background-image:url(@asset('images/placeholder/bd_placeholder_22.jpg'))"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 calendar-date">
        <h4>Sunday</h4>
        <p class="body-1">02</p>
      </div>
      <div class="col-md calendar-item">
        <div class="calendar-item-top">
          <h5>7:00 pm</h5>
          <p class="body-2">Vestibulum feugiat feugiat enim</p>
        </div>
        <div class="calendar-item-btm" style="background-image:url(@asset('images/placeholder/bd_placeholder_19.jpg'))"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 calendar-date">
        <h4>Monday</h4>
        <p class="body-1">03</p>
      </div>
      <div class="col-md calendar-item">
        <div class="calendar-item-top">
          <h5>7:00 pm</h5>
          <p class="body-2">Vestibulum feugiat feugiat enim</p>
        </div>
        <div class="calendar-item-btm" style="background-image:url(@asset('images/placeholder/bd_placeholder_2.jpg'))"></div>
      </div>
      <div class="col-md calendar-item">
        <div class="calendar-item-top">
          <h5>8:00 pm</h5>
          <p class="body-2">Vestibulum feugiat feugiat enim</p>
          <p class="body-3">Directed by Jane Doe</p>
        </div>
        <div class="calendar-item-btm" style="background-image:url(@asset('images/placeholder/bd_placeholder_30.jpg'))"></div>
      </div>
    </div>
  </div>


  <div class="container-fluid calendar-past-title">
    <div class="row">
      <h3>Past</h3>
    </div>
  </div>

  <div class="container-fluid calendar-container calendar-upcoming">
    <div class="row">
      <div class="col-md-4 calendar-date">
        <h4>Wednesday</h4>
        <p class="body-1">12 <span class="body-3">October</span></p>
      </div>
      <div class="col-md calendar-item">
        <div class="calendar-item-top">
          <h5>7:00 pm</h5>
          <p class="body-2">Vestibulum feugiat feugiat enim</p>
        </div>
        <div class="calendar-item-btm" style="background-image:url(@asset('images/placeholder/bd_placeholder_4.jpg'))"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 calendar-date">
        <h4>Thursday</h4>
        <p class="body-1">13 <span class="body-3">October</span></p>
      </div>
      <div class="col-md calendar-item">
        <div class="calendar-item-top">
          <h5>7:00 pm</h5>
          <p class="body-2">Vestibulum feugiat feugiat enim</p>
        </div>
        <div class="calendar-item-btm" style="background-image:url(@asset('images/placeholder/bd_placeholder_28.jpg'))"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 calendar-date">
        <h4>Friday</h4>
        <p class="body-1">14 <span class="body-3">October</span></p>
      </div>
      <div class="col-md calendar-item">
        <div class="calendar-item-top">
          <h5>7:00 pm</h5>
          <p class="body-2">Vestibulum feugiat feugiat enim</p>
        </div>
        <div class="calendar-item-btm" style="background-image:url(@asset('images/placeholder/bd_placeholder_20.jpg'))"></div>
      </div>
    </div>
  </div>
  @endwhile
@endsection
