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
      
      <section>
        <h1>Latest from the Blog</h1>
        <section class="latest-news"> 
        
          <?php 
          query_posts('posts_per_page=5'); 
          if(have_posts()):
            while(have_posts()): the_post();
          ?>
            <article>

              <h2><a href='<?php the_permalink() ?>'
              rel='bookmark' title='<?php the_title(); ?>'><?php the_title(); ?></a></h2>
              <p class="byline vcard">
                <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(get_option('date_format')); ?></time>
              <?php if ( has_post_thumbnail() ) {
              	the_post_thumbnail();
              } ?>
            
              <?php the_excerpt(); ?>

            </article>
          <?php
            endwhile;
          endif; 
          ?>


        </section> <?php # /latest-news ?>
      </section>

    </section> <?php # /main ?>

<?php get_footer(); ?>