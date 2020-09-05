<?php /*
<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
*/ ?>
<script src="https://kit.fontawesome.com/bd3a83b12b.js" crossorigin="anonymous"></script>
<div id="bd-navbar" class="bd-navbar">
  <div class="bd-nav-icon" style="background-image:url(@asset('images/logo/bds_logo.jpg'))" >

  </div>
  <div id="nav-icon3" class="bd-nav-icon">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <h3 class="bd-menu-item"><a href="#" class="bd-menu-link">Episodes</a></h3>
  <h3 class="bd-menu-item"><a href="/calendar" class="bd-menu-link">Calendar</a></h3>
  <h3 class="bd-menu-item"><a href="#" class="bd-menu-link">Your Stories</a></h3>
  <h3 class="bd-menu-item"><a href="#" class="bd-menu-link">Artists</a></h3>
  <h3 class="bd-menu-item"><a href="/about" class="bd-menu-link">About</a></h3>
  <h3 class="bd-menu-item"><a href="/contact" class="bd-menu-link">Contact</a></h3>
  <?php /*
  <h3 class="bd-menu-title"><a class="bd-menu-title-link" href="/"><span class="bd-menu-title-red">B</span><span class="bd-menu-title-black">l</span><span class="bd-menu-title-green">a</span><span class="bd-menu-title-yellow">c</span><span class="bd-menu-title-red">k</span> <span class="bd-menu-title-black">D</span><span class="bd-menu-title-green">a</span><span class="bd-menu-title-yellow">n</span><span class="bd-menu-title-red">c</span><span class="bd-menu-title-black">e</span> <span class="bd-menu-title-green">S</span><span class="bd-menu-title-yellow">t</span><span class="bd-menu-title-red">o</span><span class="bd-menu-title-black">r</span><span class="bd-menu-title-green">i</span><span class="bd-menu-title-yellow">e</span><span class="bd-menu-title-red">s</span>
  </a></h3>
  */ ?>
  <div class="bd-nav-socials">
        <a class="share-icon-link" href="#"><i class="fab fa-instagram"></i></a>
        <a class="share-icon-link" href="#"><i class="fab fa-youtube"></i></a>
        <a class="share-icon-link" href="#"><i class="fab fa-twitter"></i></a>
        <a class="share-icon-link" href="#"><i class="fab fa-vimeo-v"></i></a>
  </div>
</div>

