<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<?php
  query_posts('p=749');
  if(have_posts()):
    while(have_posts()): the_post();
      the_content();
    endwhile;
  endif;
  wp_reset_query();
?>

<section class="m-all t1 d1" role="complementary">
  <p>At CELT we organise environmental <a href="/courses">Courses</a>, manage our very own <a href="/about/tree-nursery">Tree Nursery</a> and <a href="/blog">Blog</a> about all things green in Ireland and beyond.</p>
</section>

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