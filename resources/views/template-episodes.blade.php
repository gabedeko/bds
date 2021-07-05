{{--
  Template Name: Episodes Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <?php 
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

 $args_0 = array( 
    'orderby' => 'ID',
    'post_type' =>array('talk'),
    'post_status' => 'publish',
    'posts_per_page' => 5,
    "orderby" => "date",
    "order" => 'DESC',
    'paged' => $paged,
 );
 $the_query_0 = new WP_Query( $args_0 );

 $query_item_num_1 = 0;

?>

<div class="bd-hero bd-hero-2 container-fluid mt-2 mb-2">
    <div class="row bd-hero-top">
        <div class="col-md-4 bd-hero-top-left">
        <div class="bd-hero-border"></div>
        <div class="bd-hero-date"></div>
        </div>
        <?php /*
        <div class="col-md-8 bd-hero-top-right" style="background-image:url(@asset('images/placeholder/bd_placeholder_32.jpg'))">
        
        </div>
        */ ?>
    </div>
    <div class="row bd-hero-btm">
        <div class="col-md bd-hero-btm-left">
            <h1 class="bd-hero-title"><i class="fas fa-circle"></i> Episodes</h1>
        </div>
        <div class="col-md bd-hero-btm-right">
            
        </div>
    </div>
</div>

{{--@include('partials.content-page') --}}

        <div class="container-fluid episodes-container mt-2">
        <?php if ( $the_query_0->have_posts() ) : while ( $the_query_0->have_posts() ) : $the_query_0->the_post();
        ?>
            <?php 
            $content = get_the_content();
            $content_length = strlen($content);
            $maxContentLength = 280;
            ?>
            <a href="<?php the_permalink(); ?>" class="row episodes-row">
                <div class="col-md episodes-left">
                    <h3 class="episodes-title"><?php the_title(); ?></h3>
                    <h5 class="episodes-date"><i class="fas fa-circle"></i> <?php the_date('l, F j, Y'); ?></h5>
                </div>
                <div class="col-md episodes-right" style="background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');  ?>)">

                </div>
            </a>

        <?php 
        $query_item_num_1++;
        ?>
        <?php endwhile;    

        $big = 999999999;
        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $the_query_0->max_num_pages,
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;'
        ) );

        else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
            
        <?php wp_reset_postdata(); ?>

        <?php /*
        <div class="row episodes-row">
            <div class="col-md episodes-left">
                <h3 class="episodes-title">Title</h3>
                <h5 class="episodes-date">Date</h5>
                <p class="episodes-desc">Phasellus condimentum dui et convallis iaculis. Nulla imperdiet sapien tincidunt odio consequat, a sollicitudin nisi fringilla. In quis suscipit mi. Aenean id enim varius, gravida risus in, egestas eros. Duis dolor lectus, scelerisque a eros ut, vulputate tempus sapien. Suspendisse interdum tempor cursus. Aenean aliquam luctus diam congue iaculis. </p>
            </div>
            <div class="col-md episodes-right" style="background-image:url(@asset('images/placeholder/bd_placeholder_22.jpg'))">

            </div>
        </div>
        */ ?>
</div>
  @endwhile
@endsection
