// import external dependencies
import 'jquery';
import 'slick-carousel/slick/slick.min.js';
//import "./bootstrap.min.js";
//import "./bootstrap-tab.js";

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
  $(this).toggleClass('open');
});

//Slick carousel
$(document).ready(function(){
  $('.bd-hero-date').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.multiple-items',
  });
  $('.multiple-items-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.multiple-items',
  });
  $('.multiple-items').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    asNavFor: '.multiple-items-for, .bd-hero-date',
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
  });
  
});

//Click Menu Button
$('#nav-icon3').click(function(){
  if ($('#bd-navbar').hasClass( 'show' )) {
    $('#bd-navbar').removeClass('show');
    $('.container-fluid').removeClass('show-nav');
  } else {
    $('#bd-navbar').addClass('show');
    $('.container-fluid').addClass('show-nav');
  }
});
//Navbar Toggler
$('#navbar-toggler').click(function(){
  if ($('#navbarNav').hasClass( 'show' )) {
    $('#navbarNav').removeClass('show');
  } else {
    $('#navbarNav').addClass('show');
  }
});

//Search Screen
$('#search-screen-close').click(function(){
  if ($('#search-screen').hasClass( 'show' )) {
    $('#search-screen').removeClass('show');
  } else {
    $('#search-screen').addClass('show');
  }
});
$('#bds-search-btn').click(function(){
  window.scrollTo(0, 0);
  if ($('#search-screen').hasClass( 'show' )) {
    $('#search-screen').removeClass('show');
  } else {
    $('#search-screen').addClass('show');
  }
});


//Young Professional Tabs
(function($){
  $('#young-link-0').click(function(){
    //Add active class to tab button
    $('#young-link-0').addClass('young-active');
    $('#young-link-1').removeClass('young-active');
    $('#young-link-2').removeClass('young-active');
    //Fade in activated tab content
    $('#young-pane-0').addClass('animate__animated animate__fadeIn');
    $('#young-pane-0').siblings().removeClass('animate__fadeIn');
    //Swap out logos
    $('#ype-circle-logo').addClass('animate__animated animate__fadeIn');
    $('#ype-journal-logo').removeClass('ype-logo-active animate__fadeIn');
    $('#ype-banner-logo').removeClass('ype-logo-active animate__fadeIn');
    
  });
  $('#young-link-1').click(function(){
    $('#young-link-1').addClass('young-active');
    $('#young-link-0').removeClass('young-active');
    $('#young-link-2').removeClass('young-active');

    $('#young-link-1').siblings().removeClass('young-active');
    $('#young-pane-1').addClass('animate__animated animate__fadeIn');
    $('#young-pane-1').siblings().removeClass('animate__fadeIn');

    $('#ype-journal-logo').addClass('animate__animated animate__fadeIn');
    $('#ype-circle-logo').removeClass('ype-logo-active animate__fadeIn');
    $('#ype-banner-logo').removeClass('ype-logo-active animate__fadeIn');
  });
  $('#young-link-2').click(function(){
    $('#young-link-2').addClass('young-active');
    $('#young-link-0').removeClass('young-active');
    $('#young-link-1').removeClass('young-active');

    $('#young-link-2').siblings().removeClass('young-active');
    $('#young-pane-2').addClass('animate__animated animate__fadeIn');
    $('#young-pane-2').siblings().removeClass('animate__fadeIn');

    $('#ype-banner-logo').addClass('animate__animated animate__fadeIn');
    $('#ype-journal-logo').removeClass('ype-logo-active animate__fadeIn');
    $('#ype-circle-logo').removeClass('ype-logo-active animate__fadeIn');
  });
})(jQuery);