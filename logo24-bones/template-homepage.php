<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<div class="slider">
      <img src="/wp-content/uploads/2012/10/celt-slider-01@1.jpg"/>
    </div>

<?php get_sidebar(); ?>

    <section role="main" class="home-content m-all t2 d2-d4">
      
      <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; ?>

      <?php endif; ?>
      
      <section class="latest-news"> 
      <h1>LATEST NEWS</h1>
        
      <?php 
      query_posts('posts_per_page=5'); 
      if(have_posts()):
        while(have_posts()): the_post();
      ?>
        <article>
          <h3><a href='<?php the_permalink() ?>'
          rel='bookmark' title='<?php the_title(); ?>'><?php the_title(); ?></a></h2>
          
          <time pubdate datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F j Y'); ?></time>
          
          <?php the_excerpt(); ?>
        </article>
      <?php
        endwhile;
      endif; 
      ?>

      </section> <?php # /latest-news ?>

    </section> <?php # /main ?>

<?php get_footer(); ?>