<?php get_header(); ?>
  
   <section role="main" class="home-content m-all t2 d2-d4">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <section role="main">
      <header>
        <h1><?php the_title(); ?></h1>
      </header>
      <?php the_content(); ?>
    </section> <!-- end article section -->

  <?php endwhile; else: ?>
    <p>Whatever you were trying, it didn't work...</p>
  <?php endif; ?>
</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>