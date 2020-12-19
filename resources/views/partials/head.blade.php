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
  <script src="https://code.createjs.com/1.0.0/preloadjs.min.js"></script>
  @php wp_head() @endphp
</head>
