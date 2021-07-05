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

  <a href="/">
    <img class="bad-nav-icon-img-tag" src="@asset('images/logo/bds_banner_logo.jpg')" alt="">
    <?php /*
    <div class="bd-nav-icon" style="background-image:url(@asset('images/logo/bds_banner_logo.jpg'))" ></div>
    */ ?>
  </a>

  <div id="nav-icon3" class="bd-nav-icon">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <i id="bds-search-btn" class="bds-search-btn fas fa-search"></i>


  <h3 class="bd-menu-item"><a href="/episodes" class="bd-menu-link">Episodes</a></h3>
  <?php /*
  <h3 class="bd-menu-item"><a href="/calendar" class="bd-menu-link">Calendar</a></h3>
  
  <h3 class="bd-menu-item"><a href="/stories" class="bd-menu-link">Your Stories</a></h3>
  */ ?>
  <h3 class="bd-menu-item"><a href="/artists" class="bd-menu-link">Artists</a></h3>
  <h3 class="bd-menu-item"><a href="/news" class="bd-menu-link">News & Press</a></h3>
  <h3 class="bd-menu-item"><a href="/initiatives" class="bd-menu-link">BDS Initiatives</a></h3>
  <?php /*<h3 class="bd-menu-item"><a href="/we-name-the-names" class="bd-menu-link">Name the Names</a></h3> */ ?>
  <h3 class="bd-menu-item"><a href="https://www.iabdassociation.org/donations/fund.asp?id=19911" target="_blank" class="bd-menu-link">Donate</a></h3>
  <h3 class="bd-menu-item"><a href="/about" class="bd-menu-link">About</a></h3>
  <h3 class="bd-menu-item bd-menu-item-last"><a href="/contact" class="bd-menu-link">Contact</a></h3>
  <?php /*
  <h3 class="bd-menu-title"><a class="bd-menu-title-link" href="/"><span class="bd-menu-title-red">B</span><span class="bd-menu-title-black">l</span><span class="bd-menu-title-green">a</span><span class="bd-menu-title-yellow">c</span><span class="bd-menu-title-red">k</span> <span class="bd-menu-title-black">D</span><span class="bd-menu-title-green">a</span><span class="bd-menu-title-yellow">n</span><span class="bd-menu-title-red">c</span><span class="bd-menu-title-black">e</span> <span class="bd-menu-title-green">S</span><span class="bd-menu-title-yellow">t</span><span class="bd-menu-title-red">o</span><span class="bd-menu-title-black">r</span><span class="bd-menu-title-green">i</span><span class="bd-menu-title-yellow">e</span><span class="bd-menu-title-red">s</span>
  </a></h3>
  */ ?>
  <div class="bd-nav-socials">
        <a class="share-icon-link" href="https://www.facebook.com/pages/category/Community-Organization/Black-Dance-Stories-114655733639715/" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a class="share-icon-link" href="https://www.youtube.com/channel/UChAdMkDQCaGWCIaBoSZirTg" target="_blank"><i class="fab fa-youtube"></i></a>
        <a class="share-icon-link" href="https://twitter.com/blkdancestories" target="_blank"><i class="fab fa-twitter"></i></a>
        <a class="share-icon-link" href="https://www.instagram.com/blackdancestories/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
  </div>
</div>

<nav class="bd-mobile-navbar fixed-top navbar ">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img class="navbar-logo" src="@asset('images/logo/bds_logo.jpg')"></a>
    <button id="navbar-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/episodes">Episodes</a>
        </li>
        <?php /*
        <li class="nav-item">
          <a class="nav-link" href="/calendar">Calendar</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/stories">Your Stories</a>
        </li>
        */ ?>
        <li class="nav-item">
          <a class="nav-link " href="/artists">Artists</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/news">News & Press</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/initiatives">BDS Initiatives</a>
        </li>
        <?php /*
        <li class="nav-item">
          <a class="nav-link " href="/we-name-the-names">Name the Names</a>
        </li>
        */ ?>
        <li class="nav-item">
          <a class="nav-link " href="https://www.iabdassociation.org/donations/fund.asp?id=19911" target="_blank">Donate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div id="search-screen" class="search-screen">
    <div class="search-screen-container">
        <p id="search-screen-close" class="search-screen-close text-right"><i class="fas fa-times"></i></p>
        <h1>Search</h1>
        <?php echo facetwp_display( 'facet', 'keywords' ) ?>
        <?php echo facetwp_display( 'template', 'site_search' ) ?>
        <?php/* echo facetwp_display( 'pager', 'false' ) */?>
    </div>
</div>