<?php
//Get Current Page URL
global $wp;
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta property="og:url"           content="<?php echo home_url( $wp->request ) ?>" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Black Dance Stories" />
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NZJ5TD4');</script>
<!-- End Google Tag Manager -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <!--script async src="https://www.googletagmanager.com/gtag/js?id=G-MBLPMMXRXF"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-MBLPMMXRXF');
  </script-->
  <script src="https://code.createjs.com/1.0.0/preloadjs.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
  @php wp_head() @endphp
</head>
