<?php
/*
Template Name: Home Page
*/
get_header(); ?>
  
  <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>
      
      
      
    <?php endwhile; ?>

  <?php endif; ?>

    <section role="main">
      <header>
        <h1>Welcome</h1>
      </header>

      <p>CELT is a community group and registered charity involved in:</p>

      <ul>
        <li>Ecology</li>
        <li>Wildlife surveys</li>
        <li>Schools projects</li>
        <li>Nature conservation</li>
        <li>Renewable energy</li>
        <li>Native Tree Nursery</li>
        <li>Traditional Skills</li>
        <li>Native trees, Agroforestry</li>
        <li>Environmental education</li>
        <li>Planting</li>
        <li>Coppice crafts</li>
        <li>And More</li>
      </ul>
      
      <p class="notice">CELT (Registered Charity CHY 14519) welcome sponsorship of projects, programmes and events. Sponsors will benefit from any media coverage and will be included in our brochures and newsletters. Please get in touch if you can help - you can make an important contribution to environmental education and training.</p>
      
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