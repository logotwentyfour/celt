<?php
/*
Template Name: Page
*/
get_header(); ?>

<div class="page">

<?php get_sidebar(); ?>

    <section role="main" class="home-content m-all t2 d2-d4">
      
      <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; ?>

      <?php endif; ?>

    </section> <?php # /main ?>

  </div> <?php //End of .page ?>

<?php get_footer(); ?>