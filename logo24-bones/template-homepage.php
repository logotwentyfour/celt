<?php
/*
Template Name: Home Page
*/
get_header(); ?>

    <section role="main">
      
      <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; ?>

      <?php endif; ?>
      
      <section class="latest-news"> 
        
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

<?php get_sidebar(); ?>
<?php get_footer(); ?>