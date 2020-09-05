// import external dependencies
import 'jquery';
import 'slick-carousel/slick/slick.min.js';

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
    asNavFor: '.multiple-items-for',
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