<?php
/*
Template Name: Courses index
*/
get_header(); ?>
  
  <div class="page">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <section class="m-all t1 d1" role="complementary">
        <?php wp_nav_menu(array('menu'=>'courses')); ?>
      </section>

      <section role="main" class="m-all t2 d2-d4">
        <header>
          <h1><?php the_title(); ?></h1>
        </header>
        <?php the_content(); ?>
      </section> <!-- end article section -->

    <?php endwhile; else: ?>
      <p>Whatever you were trying, it didn't work...</p>
    <?php endif; ?>
  
  </div> <?php #page ?>

<?php get_footer(); ?>