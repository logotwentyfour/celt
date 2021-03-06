<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<?php # Sliding Banner
  query_posts('p=749');
  if(have_posts()):
    while(have_posts()): the_post();
      the_content();
    endwhile;
  endif;
  wp_reset_query();
?>

<section class="m-all t1 d1" role="complementary">
  <?php wp_nav_menu(array('menu'=>'HOME'));
    query_posts('p=766');
    if(have_posts()):
      while(have_posts()): the_post();
        the_content();
      endwhile;
    endif;
    wp_reset_query();
  ?>
</section>

<section role="main" class="m-all t2 d2-d4">
  
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  <?php endif; ?>
  


    </section> <?php # /latest-news ?>
      
  </section>

</section> <?php # /main ?>

<?php get_footer(); ?>