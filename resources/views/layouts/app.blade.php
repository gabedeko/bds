<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body id="body" @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <?php /* Facebook SDK Share Javascript */ ?>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0" nonce="S1ruaqoT"></script>
    <?php /* Facebook SDK Share Javascript */ ?>
    <div class="content">
      <main class="main">
        @yield('content')
      </main>
      @if (App\display_sidebar())
        <aside class="sidebar">
          @include('partials.sidebar')
        </aside>
      @endif
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
    <?php 
    $args_0 = array( 
    'orderby' => 'ID',
    'post_type' =>array('talk'),
    'posts_per_page' => 16,
    );
    $the_query_0 = new WP_Query( $args_0 );

    ?>
    <?php
    /*
    //////////////////////////////PreLoad Animation Script
    We only want to run the PreLoadJS Script {IF} the page is being loaded on a desktop
    If the page is loading on a mobile device ignore the script
    */
    if ( !wp_is_mobile() ) { //This is a desktop page
        ?>
        <script>
    jQuery(window).load(function() {
      if (sessionStorage.getItem('dontLoad') == null)
          {
          /* Preloader Test */
          let loader = document.getElementById('loader');
          loader.classList.add('show-loader');
          let progress_screen = document.getElementById('progress-screen');
          let body = document.getElementById('body');
          
          var queue = new createjs.LoadQueue(false);
      
          queue.on("fileload", handleFileComplete);
          queue.on('loader', event => {
              //Only add 'body-shrink' if on home page
              <?php if ( is_home() ) { ?> body.classList.add('body-shrink'); console.log('shit'); <?php } else {} ?>
              //progress bar loads to 100 then is complete
              let loader = Math.floor(event.loader * 100);
              this.loader.style.width = loader+'%';
              if (loader == 100) {
                  console.log('all done');
                  document.querySelector('body').style.background = 'white'
              }
          });
          <?php if ( $the_query_0->have_posts() ) : $x = 0; while ( $the_query_0->have_posts() ) : $the_query_0->the_post(); 
          $film_clip = get_field('image');
          ?>
          
          queue.loadFile('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');  ?> ');
          console.log('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');  ?> is the link');
          /*queue.on("progress", function() {
              console.log("Progress test 1:", queue.progress, event.progress);
          });*/
          <?php $x++; ?>
          <?php endwhile; else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
          <?php wp_reset_query(); ?>
          //Once complete add classes to fade out
          queue.on('complete', event => {
            setTimeout(() => {
                progress_screen.classList.add('progress-screen-fadein');
              },1500);
              setTimeout(() => {
                loader.classList.add('progress-fadeout');
              },500);
              setTimeout(() => {
                loader.classList.add('loader-screen-index');
              },2000);
              setTimeout(() => {
                progress_screen.classList.add('progress-screen-index');
              },2400);
              setTimeout(() => {
                body.classList.remove('body-shrink');
              },1500);
          });
          
          function handleFileComplete(event) {
            
          var item = event.item; // A reference to the item that was passed in to the LoadQueue
          var type = item.type;

          // Add any images to the page body.
          if (type == createjs.Types.IMAGE) {
              //progress-screen.appendChild(event.result);
              
          }

          }
            sessionStorage.setItem('dontLoad', 'true');
          }
      else {
        let progress_screen = document.getElementById('progress-screen');
        progress_screen.classList.add('dont-show-progress');
      }
      });
    </script>
        <?php
    } else { //This is a mobile page
        //Do nothing
    }
    ?>
  </body>
</html>
